<?php

namespace App\Model\Home;

use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    //
    protected $table = 'orders';
    protected $primaryKey = 'oid';
    public $timestamps = false;


}
