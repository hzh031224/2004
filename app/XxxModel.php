<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class XxxModel extends Model
{
     protected $table = "p_category";
    protected $primaryKey = "cat_id";
    public $timestamps = false;
    protected $guarded = [];
}

