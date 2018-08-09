<?php

namespace App\Model\Home;

use Illuminate\Database\Eloquent\Model;

class Details extends Model
{
    //
    protected $table = 'details';
    protected $primaryKey = 'did';
    public $timestamps = false;

    public function orders()
    {
        return $this->belongsTo('App\Model\Home\Orders', 'oid', 'orders_id');
    }

    public function goods()
    {
        return $this->hasOne('App\Model\Home\Goods', 'gid','goods_id');
    }

}
