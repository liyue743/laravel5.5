<?php

namespace App\Model\Home;

use Illuminate\Database\Eloquent\Model;

class Goods extends Model
{
    //
    protected $table = 'goods';
    protected $primaryKey = 'gid';
    public $timestamps = false;
}
