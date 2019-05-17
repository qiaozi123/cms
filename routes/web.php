<?php

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

Route::get('/', 'HomeController@index');
Route::get('anli', 'AnliController@index');
Route::get('anli/type/{id}', 'AnliController@type');
Route::get('anli/style/{id}', 'AnliController@style');
Route::get('anli/area/{id}', 'AnliController@area');
Route::get('case/{id}', 'AnliController@show');
Route::get('gonglue', 'GonglueController@index');
Route::get('guide/{id}', 'GonglueController@show');
Route::get('designer', 'GongzhangController@index');
Route::get('designer/price/{id}', 'GongzhangController@price');
Route::get('designer/style/{id}', 'GongzhangController@style');
Route::get('designer/time/{id}', 'GongzhangController@time');
Route::get('pm/{id}', 'GongzhangController@show');
Route::get('cell/{id}', 'StudioController@index');

Route::post('userpost', 'UserController@post');
//用户登录
Route::post('user/login', 'AuthController@login');
//用户注册
Route::post('user/regist', 'AuthController@regist');
Route::post('user/logout', 'AuthController@logout');

//报价路由
Route::get('baojia', 'UserController@baojia');
Route::post('baojia', 'UserController@dobaojia');





/*
|--------------------------------------------------------------------------
| Administrator Routes
|--------------------------------------------------------------------------
|
| 载入后台相关路由
|
*/
require __DIR__ . '/administrator.php';
