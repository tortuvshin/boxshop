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