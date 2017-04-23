<?php
namespace app;

use App\Eloquent\Model;
class FreeProductParticipant extends Model
{
    /**
     * @var string
     */
    protected $table = 'freeproduct_participants';
    /**
     * @var array
     */
    protected $fillable = [
        'freeproduct_id',
        'user_id',
        'status',
    ];
    public function scopeMyParticipations($query, $freeproduct_id)
    {
        if (\Auth::user()) {
            return $query->where('freeproduct_id', $freeproduct_id)->where('user_id', \Auth::user()->id);
        }
    }
}