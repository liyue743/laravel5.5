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


//前台主页
Route::get('/', function () {
    return view('home/index');
});
//前台个人信息路由组
Route::group([],function(){
	//个人中心主页
	Route::any('/myself','home\SelfController@index');
});


/*************huanghuan   luyou******************/	
Route::group([],function(){
	Route::get('/admin','admin\AdminController@index');//后台的首页
	Route::get('/admin/{id}/status','admin\AdminController@status');//商品上架下架

	Route::resource('/cate','admin\CateController');//商品类别的整体增删改查
	Route::resource('/goods','admin\GoodsController');//商品整体的增删改查
});
/*************huanghuan   luyou******************/



/*****************何其威——用户**********************/
//用户管理理由组
Route::group([],function() {
	//用户停用站
	Route::get('/users/dels',function() {
		return view('admin/users/users_dels');
	});
	//用户等级路由
	Route::get('/users/level',function() {
		return view('admin/users/users_level');
	});
	//修改密码页
	Route::get('/users/pass/{id}','admin\UsersinfoController@pass');
	//ajax验证用户名
	Route::any('/checkuname','admin\AjaxController@checkuname');
	//验证密码
	Route::post('/users/dopass/{id}','admin\UsersinfoController@dopass');
	//用户个人信息
	Route::any('/users/show/{id}','admin\UsersinfoController@show');
	//Ajax批量删除
	Route::any('/users/dels','admin\AjaxController@delusers');
	//用户资源路由
	Route::resource('/users','admin\UsersController');
});

Route::group([],function() {
	//商品评论资源路由
	Route::resource('/commonts','admin\CommontsController');
	

});



/***********何其威——用户相关服辅助功能路由*************/
Route::any('/checkuname','admin\AjaxController@checkuname');
Route::any('/users/dels','admin\AjaxController@delusers');
Route::any('/users/show/{id}','admin\UsersinfoController@show');
/***********何其威——用户相关服辅助功能路由*************/




//网站前台

//前台登录
Route::any('/homes/login','Home\LoginController@login');
// 注册
Route::any('/homes/register','Home\RegisterController@regist');

//后台登录
Route::any('admins/login','Admin\LoginController@login');
Route::any('admins/dologin','Admin\LoginController@dologin');
Route::any('admins/captcha','Admin\LoginController@captcha');
Route::any('admins/loginout','Admin\LoginController@loginout');



//网站后台
Route::group(['middleware'=>'login'],function(){

//






	Route::any('/admins','admin\AdminController@index'); //后台首页
	Route::resource('/admins/users','Admin\UsersController');//管理员
});