<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Puser extends Model
{
    public $table = 'p_users';
    protected $primaryKey = 'user_id';
    public $timestamps = false;

}
