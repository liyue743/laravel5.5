<?php

namespace App\Model\Admin;

use Illuminate\Database\Eloquent\Model;

class goods extends Model
{
    //
    protected $table = 'goods';
    protected $primaryKey = 'gid';
    public $timestamps = false;
}