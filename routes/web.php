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
Route::get('case/{id}', 'AnliController@show');
Route::get('gonglue', 'GonglueController@index');
Route::get('guide/{id}', 'GonglueController@show');
Route::get('gongzhang', 'GongzhangController@index');
Route::get('pm/{id}', 'GongzhangController@show');

Route::post('userpost', 'UserController@post');





/*
|--------------------------------------------------------------------------
| Administrator Routes
|--------------------------------------------------------------------------
|
| 载入后台相关路由
|
*/
require __DIR__ . '/administrator.php';
