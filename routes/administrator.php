<?php
/**
 * LaraCMS - CMS based on laravel
 *
 * @category  LaraCMS
 * @package   Laravel
 * @author    Wanglelecc <wanglelecc@gmail.com>
 * @date      2018/06/06 09:08:00
 * @copyright Copyright 2018 LaraCMS
 * @license   https://opensource.org/licenses/MIT
 * @github    https://github.com/wanglelecc/laracms
 * @link      https://www.laracms.cn
 * @version   Release 1.0
 */

/*
|--------------------------------------------------------------------------
| Administrator Routes
|--------------------------------------------------------------------------
|
| 管理后台相关路由定义
|
*/

/*
 * -------------------------------------------------------------------------
 * 后台不需要需要认证相关路由
 * -------------------------------------------------------------------------
 */
Route::group(['domain' => config('administrator.domain'), 'prefix' => config('administrator.uri'), 'namespace' => 'Administrator', 'middleware' => [], ], function () {


});

/*
 * -------------------------------------------------------------------------
 * 后台需要认证相关路由
 * -------------------------------------------------------------------------
 */
Route::group(['prefix' => 'admin', 'namespace' => 'Admin',], function () {
    # 后端示例路由
    Route::get('/', 'AuthController@login');
    Route::post('/', 'AuthController@dologin');
    Route::get('home', 'AuthController@index');
    Route::get('list', 'AuthController@list');
    Route::get('logout', 'AuthController@logout');
    #后台用户路由
    Route::get('user/list', 'UserController@list');
    #后台角色路由
    Route::get('role/list', 'RolesController@list');
    #后台权限路由
    Route::get('permission/list', 'PermissionController@list');
    Route::get('permission/create', 'PermissionController@create');
    Route::post('permission/create', 'PermissionController@docreate');
    #后台轮播路由
    Route::get('lunbo/list', 'LunboController@list');
    Route::get('lunbo/create', 'LunboController@create');
    Route::post('lunbo/create', 'LunboController@docreate');
    Route::get('lunbo/list/{id}', 'LunboController@show');
    Route::post('lunbo/list/{id}/create', 'LunboController@createpic');
    #后台图片上传路由
    Route::post('/upload/lunbo', 'LunboController@createpic');//轮播图片上传路由
    Route::post('/upload/avatar/', 'LunboController@createavatar');//文章图片上传路由
    Route::post('/upload/designer/', 'LunboController@createdesigner');//设计师图片上传路由

    #后台文章路由
    Route::get('article/team','ArticleController@team');
    Route::get('article/create','ArticleController@create');
    Route::post('article/create','ArticleController@docreate');
    Route::get('article/list','ArticleController@list');
    Route::get('article/list/create','ArticleController@creteartcle');
    Route::post('article/list/create','ArticleController@docreteartcle');

    #设计师路由
    Route::get('designer/list','DesignerController@list');
    Route::get('designer/create','DesignerController@create');
    Route::post('designer/create','DesignerController@docreate');

});
