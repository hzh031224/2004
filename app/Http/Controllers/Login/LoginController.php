<?php

namespace App\Http\Controllers\Login;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Puser;
use Validator;
class LoginController extends Controller
{
    public function login_do(Request $request){
        $post=$request->except('_token');
        $post=$request->except('last_login');
        $post['password']=md5('password');

        $user = Puser::where('user_name',$post['user_name'])->first();
        // dump($user);exit;
        //根据用户查询出来的信息
        if(($user->password)!=$post['password']){
            return redirect('/index/login');
        }
        if(($user->user_name)!=$post['user_name']){
            return redirect('/index/login');
        }
        $data['last_login']=time();
        $res = Puser::where('user_id',$user['user_id'])->update($data);
        //存入session
        session_start();
        // $user_name = array_column($user(), 'user_name');
        // $user_id = array_column($user, 'user_id');
        $_SESSION['user_name']=$user['user_id'];
        $_SESSION['user_id']=$user['user_name'];
        return redirect('index/index');
    }

}
