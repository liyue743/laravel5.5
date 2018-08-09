<?php

namespace App\Model\Admin\orders;

use Illuminate\Database\Eloquent\Model;

class details extends Model
{
    //
    protected $table = 'details';
    protected $primaryKey = 'goods_id';
    public $timestamps = false;

    public function goods()
    {
        return $this->hasMany('App\Model\Admin\orders\goods','gid','goods_id');
    }

}
