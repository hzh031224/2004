<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::prefix('/index')->group(function(){
    Route::get('/index','Index\IndexController@index');
    Route::get('/login','Index\IndexController@login');
    Route::get('/register','Index\IndexController@register');
    Route::get('/list/{id}','Index\IndexController@list');
    Route::get('/cart','Index\IndexController@cart');
    Route::get('/goods','Index\IndexController@goods');
    Route::get('/tui','Index\IndexController@tui');
});
Route::prefix('/login')->group(function(){
    Route::post('/store','Login\RegisterController@store');
    Route::post('/login_do','Login\LoginController@login_do');
    Route::get('/code','Login\RegisterController@code');
});
Route::prefix('/cart')->group(function(){
    Route::get('/cart_do','Cart\CartController@cart_do');
    Route::get('/cartlist','Cart\CartController@cartlist');

});
Route::get('/tian','Index\IndexController@tian');
Route::get('/diqu','Index\IndexController@diqu');
Route::get('/pooo','Index\IndexController@pooo');








