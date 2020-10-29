<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Goods extends Model
{
    protected $table = 'p_goods';
    protected $primarykey = 'goods_id';
    public $timestamps = false;
}
