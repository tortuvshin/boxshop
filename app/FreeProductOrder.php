<?php
namespace app;
use App\Eloquent\Model;
class FreeProductOrder extends Model
{
    /**
     * @var string
     */
    protected $table = 'freeproduct_order';
    /**
     * @var array
     */
    protected $fillable = [
        'freeproduct_id',
        'order_id',
    ];
    /**
     * @return Collection Order Information
     */
    public function Orders()
    {
        return $this->hasMany('App\Order');
    }
    public function FreeProducts()
    {
        return $this->hasMany('App\FreeProduct');
    }
}