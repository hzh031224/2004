<?php

namespace App\Http\Controllers\Login;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Puser;
class RegisterController extends Controller
{
    public function store(Request $request){
        $post = request()->except(['_token']);
        $post['reg_time'] = time();
        $post['password'] = md5('password');
        $post['last_ip'] = $_SERVER['REMOTE_ADDR'];
        // dump($post);exit;
        // $res =Puser::create($post);
        $res = \DB::table('p_users')->insert($post);
        if($res){
            return redirect('/index/login');
        }
    }
    public function code(){
    }
}
