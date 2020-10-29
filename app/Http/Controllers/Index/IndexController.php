<?php

namespace App\Http\Controllers\Index;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Client;
use GuzzleHttp\Promise;
use App\Goods;
use App\Model\Category;
class IndexController extends Controller
{
    public  function index(){
        //
        session_start();
        $where[]=[
            'parent_id','=',0
        ];
        // $cate=Category::all();
        // $cate=$this->createTree($cate);
        $data=Goods::paginate(12);
        // dump($data);exit;
        // dd($cate);
        return view('index/index',['data'=>$data]);
    }
    public function createTree($data,$parent_id=0,$level=1){
        if(!$data){
            return;
        }
        static $newarray=[];
        foreach($data as $v){
            if($v->parent_id==$parent_id){
                $v->level = $level;
                $newarray[]=$v;
                $this->createTree($data,$v->cat_id,$level+1);
            }
        }
        return $newarray;
    }
    public  function login(){
        return view('login/login');
    }
    public  function register(){
        return view('login/register');
    }
    public  function list($goods_id){
        session_start();
        $res= \DB::table('p_goods')->where('goods_id',$goods_id)->first();
        if($res==''){
            echo"无商品";
            return view('index/index');
        }

                // dump($res);exit;
        // dump($res);exit;

        return view('goods/list',['res'=>$res]);
    }
    public  function cart(){
        session_start();
        return view('goods/cart');
    }
    public function goods(Request $request){

        // if($res){
        //     $key = 'h:res:'.$res->goods_id;
        // }
    }
    public function tui(Request $request)
    {
        // 初始化session.
        session_start();
        /*** 删除所有的session变量..也可用unset($_SESSION[xxx])逐个删除。****/
        $_SESSION = array();
        /***删除sessin id.由于session默认是基于cookie的，所以使用setcookie删除包含session id的cookie.***/
        if (isset($_COOKIE[session_name()])) {
           setcookie(session_name(), '', time()-42000, '/');
        }
        // 最后彻底销毁session.
        session_destroy();
        return view('login/login');
    }
    public function tian(){
        $res="https://devapi.qweather.com/v7/weather/now?location=101010700&key=3e53a367400347b2afce3b9692011bd7&gzip=n";
        $json_str = file_get_contents($res);
        $data = json_decode($json_str,true);
        print_r($data);
    }
    public function diqu(){
        $url = "https://devapi.qweather.com/v7/weather/now?location=101010700&key=3e53a367400347b2afce3b9692011bd7&gzip=n";
        $ch = curl_init();

        // 设置URL和相应的选项
        curl_setopt($ch, CURLOPT_URL,$url);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
        curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,0);
        curl_setopt($ch,CURLOPT_SSL_VERIFYHOST,0);
        // 抓取URL并把它传递给浏览器
        $json_str = curl_exec($ch);
        $err_no = curl_errno($ch);
        if($err_no){
            $err_msg = curl_error($ch);
            echo"错误信息 ：".$err_msg;
            die;
        }
        

        // 关闭cURL资源，并且释放系统资源
        curl_close($ch);
        $data = json_decode($json_str,true);
        print_r($data);
    }
    //
    public function pooo(){
        $uri = "https://devapi.qweather.com/v7/weather/now?location=101010700&key=3e53a367400347b2afce3b9692011bd7&gzip=n";
        $client = new Client();
        $res = $client->request('GET',$uri,['verify'=>false]);
        $body = $res->getBody();
        echo $body;

        $data = json_decode($body,true);
        print_r($data);
    }

    //
    public function pdp(){
        $uri = "https://devapi.qweather.com/v7/weather/now?location=101010700&key=3e53a367400347b2afce3b9692011bd7&gzip=n";
    }
}
