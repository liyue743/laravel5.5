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
//首页路由
Route::get('/', function () {
    return view('home/index');
});

//后台登录路由
Route::get('/admin/login','admin\LoginController@login');

//后台主页路由
Route::get('/admin/index',function() {
	return view('admin/index',['title'=>'TBB项目后台']);
});

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






