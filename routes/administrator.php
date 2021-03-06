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
    Route::post('lunbo/delete', 'LunboController@delete');
    Route::get('lunbo/updatearticle', 'LunboController@updatearticle');
    Route::post('lunbo/updatearticle', 'LunboController@doupdatearticle');

    #后台图片上传路由
    Route::post('/upload/lunbo', 'LunboController@createpic');//轮播图片上传路由
    Route::post('/upload/avatar/', 'LunboController@createavatar');//文章图片上传路由
    Route::post('/upload/designer/', 'LunboController@createdesigner');//设计师图片上传路由
    Route::post('/upload/merchant/', 'LunboController@createmerchant');//设计师图片上传路由
    Route::post('/upload/case/lunbo', 'LunboController@createcase');//设计师图片上传路由

    #后台文章路由
    Route::get('article/team','ArticleController@team');
    Route::get('article/create','ArticleController@create');
    Route::post('article/create','ArticleController@docreate');
    Route::get('article/update/{id}','ArticleController@update');
    Route::post('article/update','ArticleController@doupdate');
    Route::get('article/list','ArticleController@list');
    Route::get('article/list/create','ArticleController@creteartcle');
    Route::post('article/list/create','ArticleController@docreteartcle');

    #设计师路由
    Route::get('designer/list','DesignerController@list');
    Route::get('designer/create','DesignerController@create');
    Route::post('designer/create','DesignerController@docreate');
    Route::post('designer/delete','DesignerController@delete');

    #案例路由
    Route::get('case/list','CaseController@list');
    Route::get('case/create','CaseController@create');
    Route::post('case/create','CaseController@docreate');
    Route::post('case/delete','CaseController@delete');

    Route::get('case/list/create','CaseController@create');
    Route::post('case/list/create','CaseController@docreate');

    Route::get('case/list/lunbo/{id}','CaseController@lunbolist');//案例轮播
    Route::post('case/list/lunbo/create','CaseController@lunbolistcreate');//案例轮播post



    Route::get('case/type/list','CaseController@createlist');
    Route::get('case/type/create','CaseController@createtype');
    Route::post('case/type/create','CaseController@docreatetype');
    Route::post('case/type/delete','CaseController@typedelete');

    Route::get('case/type/data/list/{id}','CaseController@typedatalist');
    Route::get('case/type/data/create/{id}','CaseController@typdatecreate');
    Route::post('case/type/data/create','CaseController@dotypdatecreate');
    Route::post('case/type/data/delete','CaseController@typdatedelete');


    #商户路由
    Route::get('merchant/list','MerchantController@list');
    Route::get('merchant/create','MerchantController@create');
    Route::post('merchant/create','MerchantController@docreate');
    Route::post('merchant/delete','MerchantController@delete');

    #友链路由
    Route::get('friend/list','FriendLinkController@list');
    Route::get('friend/create','FriendLinkController@create');
    Route::post('friend/create','FriendLinkController@docreate');
    Route::post('friend/delete','FriendLinkController@delete');

});
