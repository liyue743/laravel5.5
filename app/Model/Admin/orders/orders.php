<?php

namespace App\Model\Admin\orders;

use Illuminate\Database\Eloquent\Model;

class orders extends Model
{
    //
    protected $table = 'orders';
    protected $primaryKey = 'id';
    public $timestamps = false;

     public function details()
    {
        return $this->hasMany('App\Model\Admin\orders\details','ordes_id','oid');
    }
}
