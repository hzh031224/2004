<?php

namespace App\Http\Controllers\Cart;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use app\Model\Cart;
class CartController extends Controller
{
    public function cart_do(Request $request){
        session_start();
        $post=$request->except('_token');
        $post['user_id']=$request->session()->get('user.user_id');;
        $post['ctime']=time();
        // dump($post);exit;
        $res = \DB::table('cart')->insert($post);
        if($res){
            return redirect('cart/cartlist');
        }

    }
    public function cartlist(){
        $res = \DB::table('cart')
            ->join('p_goods','cart.goods_id','=','p_goods.goods_id')
            ->paginate(100000);
        // print_r($res);exit;
        return view('goods/cart',['res'=>$res]);
    }

}