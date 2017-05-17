<?php
namespace app\Http\Controllers;

use App\Address;
use App\FreeProduct;
use App\FreeProductOrder;
use App\FreeProductParticipant;
use App\Http\Controllers\Controller;
use App\Order;
use App\OrderDetail;
use App\Product;
use App\User;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class FreeProductsController extends Controller
{
    private $form_rules = [
        'description'                 => 'required|max:255',
        'start_date'                  => 'required|date',
        'end_date'                    => 'required|date|after:start_date',
        'participation_cost'          => 'required|numeric|digits_between:1,10|min:0',
        'min_participants'            => 'required|numeric|digits_between:1,3|min:1',
        'max_participants'            => 'required|numeric|digits_between:1,3|min:1',
        'max_participations_per_user' => 'required|numeric|digits_between:1,2|min:1',
        'draw_number'                 => 'required|numeric|digits_between:1,2|min:1',
        'draw_date'                   => 'required|date|after:end_date',
    ];

    private $panel = [
                'center' => ['width' => '12'],
            ];
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $user = \Auth::user();
        $filter = $request->get('filter');
        if ($filter && $filter != '') {
            switch (strtolower($filter)) {
                case 'active': $freeproducts = FreeProduct::getListWithPaginate(8, 1); break;
                case 'inactive': $freeproducts = FreeProduct::getListWithPaginate(8, 0); break;
                case 'participations':
                    //$userholdings = FreeProductParticipant::where('user_id', $user->id)->select('freeproduct_id')->get()->toArray();
                    //$freeproducts=FreeProduct::whereIn('id', $userholdings)->with('orders')->paginate(8);
                    $freeproducts = FreeProduct::with('orders')
                                    ->join('freeproduct_participants as p', function ($join) {
                                        $join->on('freeproducts.id', '=', 'p.freeproduct_id')
                                        ->where('p.user_id', '=', \Auth::user()->id);
                                    })
                                    //->where('p.user_id', '=', $user->id);
                                    ->select('freeproducts.*', 'p.status as status_holding')
                                    ->paginate(8);
                    //dd($freeproducts->toSql());
                    break;
                default: $freeproducts = FreeProduct::getListWithPaginate(8); break;
            }
        } else {
            $freeproducts = FreeProduct::getListWithPaginate(8);
        }
        $panel = $this->panel;
        $route = route('freeproducts.search');
        return view('freeproducts.index', compact('panel', 'freeproducts', 'filter', 'route'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create($orderId)
    {
        $order = Order::whereId($orderId)->select('id', 'type')->first();
        $user = \Auth::user();
        if ($user) {
            //If a user is not trusted, send the error. Avoiding direct access routes to action by invalid user
            if (!$user->isTrusted()) {
                return redirect()->route('orders.show_cart', [$order->id])->withErrors(trans('freeproduct.unauthorized_access'));
            }
            //You can create free product from a sort order cart or wish list
            if (($order->type != 'cart') && ($order->type != 'wishlist')) {
                return redirect()->route('orders.show_cart', [$order->id])->withErrors(trans('freeproduct.order_type_invalid'));
            }
            //As is authorized to create, I check order detail
            $order_content = OrderDetail::where('order_id', $order->id)->get();
            //Sumatorial the total order to validate that the free product creator has enough points for the transaction
            $total_points = 0;
            foreach ($order_content as $orderDetail) {
                $product = Product::whereId($orderDetail->product_id)->select('id', 'price')->first();
                $total_points += $orderDetail->quantity * $product->price;
            }
            if ($user->current_points < $total_points) {
                return redirect()->route('orders.show_cart')->withErrors(['main_error' => [trans('store.cart_view.insufficient_funds')]]);
            }
            $jsonOrder = json_encode($order_content->toArray());
            $panel = $this->panel;
            return view('freeproducts.create', compact('jsonOrder', 'panel', 'orderId'));
        } else {
            return redirect()->route('products')->withErrors(trans('freeproduct.unauthorized_access'));
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), $this->form_rules);
            if ($validator->fails()) {
                return redirect()->route('freeproducts.create', [$request->input('order_id')])
                ->withErrors($validator->errors())->withInput();
            }
            //As is not defined that way is going to deliver products for every winner, I will confirm that the total winning is equal to total products in the cart
            $cart_detail = OrderDetail::where('order_id', $request->input('order_id'))->get();
            if ($request->input('draw_number') > $cart_detail->count()) {
                return redirect()->route('freeproducts.create', [$request->input('order_id')])
                                     ->withErrors(trans('freeproduct.drawnumber_exceed_total_products'))->withInput();
            } else {
                //Process the order. The process is the same as with a shopping cart. The address is not requested
                //Direction is taken as the one with the user by default. Not having, it notifies the user to create a.
                $errors = Order::placeOrders('freeproduct');
                if ($errors) {
                    return redirect()->route('freeproducts.create', [$request->input('order_id')])
                                     ->withErrors($errors)->withInput();
                } else {
                    $user = \Auth::user();
                    //Save Free Product
                    $freeproduct = new FreeProduct();
                    $freeproduct->user_id = $user->id;
                    $freeproduct->description = $request->input('description');
                    $freeproduct->start_date = $request->input('start_date');
                    $freeproduct->end_date = $request->input('end_date');
                    $freeproduct->participation_cost = $request->input('participation_cost');
                    $freeproduct->min_participants = $request->input('min_participants');
                    $freeproduct->max_participants = $request->input('max_participants');
                    $freeproduct->max_participations_per_user = $request->input('max_participations_per_user');
                    $freeproduct->draw_number = $request->input('draw_number');
                    $freeproduct->draw_date = $request->input('draw_date');
                    $freeproduct->save();
                    //Because the method placeOrders products generates orders for each vendor, you need to associate these orders to free product
                    $orders = Order::ofType('freeproduct')->ofStatus('paid')->where('user_id', $user->id)->get();
                    if ($orders) {
                        foreach ($orders as $order) {
                            //Each order products are searched and a duplicate of the same is made, marking them as a free product. This will allow the product goes on the results of the advanced search
                            $order_detail = OrderDetail::where('order_id', $order->id)->get();
                            if ($order_detail) {
                                foreach ($order_detail as $detail) {
                                    $product = Product::find($detail->product_id);
                                    $productactual = $product->toArray();
                                    unset($productactual['id']);
                                    unset($productactual['num_of_reviews']);
                                    $productactual['user_id'] = $user->id;
                                    $productactual['stock'] = $detail->quantity;
                                    $productactual['type'] = 'freeproduct';
                                    $productactual['parent_id'] = $product->id;
                                    $newproduct = Product::create($productactual);
                                }
                            }
                            if (!FreeProductOrder::where('order_id', $order->id)->first()) {
                                //order registration as a free product
                                $order_to_fp = new FreeProductOrder();
                                $order_to_fp->freeproduct_id = $freeproduct->id;
                                $order_to_fp->order_id = $order->id;
                                $order_to_fp->save();
                            }
                        }
                    }
                    //Send message process Ok and redirect
                    Session::flash('message', trans('freeproduct.saved_successfully'));
                    return redirect()->route('freeproducts.show', [$freeproduct->id]);
                }
            }
        } catch (ModelNotFoundException $e) {
            Log::error($e);
            return redirect()->back()->withErrors(['induced_error' => [trans('freeproduct.error_exception')]])->withInput();
        }
    }
    /**
     * Return the product data free query view.
     *
     * @param int $id of freeproduct
     *
     * @return View
     */
    public function show($id)
    {
        $freeproduct = FreeProduct::with('orders')->find($id);
        if ($freeproduct) {
            //Get Total equity investments in the product user free
            $userholdings = FreeProductParticipant::MyParticipations($id)->count();
            $isParticipating = ($freeproduct->max_participations_per_user > $userholdings) ? 0 : 1;
            $panel = $this->panel;
            return view('freeproducts.show', compact('freeproduct', 'isParticipating', 'panel'));
        } else {
            Session::flash('message', trans('freeproduct.freeproduct_not_exist'));
            return redirect(route('products'));
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        //
    }
    /**
     * Update the specified resource in storage.
     *
     * @param int $id
     *
     * @return Response
     */
    public function update($id)
    {
        //
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}