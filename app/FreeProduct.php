<?php
namespace app;

use App\Eloquent\Model;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Pagination\LengthAwarePaginator as Paginator;
class FreeProduct extends Model
{
    /**
     * @var string
     */
    protected $table = 'freeproducts';
    /**
     * @var array
     */
    protected $fillable = [
        'user_id',
        'description',
        'start_date',
        'end_date',
        'participation_cost',
        'min_perticipants',
        'max_perticipants',
        'max_participations_per_user',
        'draw_number',
        'draw_date',
        'status',
    ];
    protected $products;
    
    public function Orders()
    {
        return $this->belongsToMany('App\Order', 'freeproduct_order', 'freeproduct_id')->withTimestamps();
    }
    public function scopeOfStatus($query, $status)
    {
        return $query->whereStatus($status);
    }
    public function scopeIsValidIn($query, $date)
    {
        return $query->where('start_date', '<=', $date)->where('end_date', '>=', $date);
    }

    public static function getWithProducts(Collection $items)
    {
        $freeproducts = $items->each(function ($item, $key) {
            $list_products_orders = Collection::make();
            foreach ($item->orders as $order) {
                $list_products_orders = $list_products_orders->merge($order->products);
            }
            $item->products = $list_products_orders;
        });
        return $freeproducts;
    }
    public static function getNextEvents($fields, $limit, $date)
    {
        $events = self::
                    select($fields)
                    ->OfStatus('1')
                    ->IsValidIn($date)
                    ->with('orders')
                    ->orderBy('draw_date')
                    ->take($limit)
                    ->get();
        return self::getWithProducts($events);
    }
    public static function getListWithPaginate($paginator = 0, $status = null, $fields = ['*'])
    {
        $query = self::select($fields);
        if ($status) {
            $query->ofStatus($status);
        }
        $freeproducts = $query->get();
        return $paginator ?
                new Paginator(self::getWithProducts($freeproducts), $freeproducts->count(), $paginator, Paginator::resolveCurrentPage(), ['path' => Paginator::resolveCurrentPath()])
                : self::getWithProducts($freeproducts);
    }
}