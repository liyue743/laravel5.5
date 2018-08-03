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
//=================何其威==============================
//首页路由
Route::get('/', function () {
    return view('welcome');
});


//后台登录路由
Route::get('/admin/login','admin\LoginController@login');

//后台主页路由
Route::get('/admin/index',function() {
	return view('admin/index');
});

//用户管理理由组
Route::group([],function() {

	//用户回收站
	Route::get('/users/dels',function() {
		return view('admin/users/users_dels');
	});
	//用户等级路由
	Route::get('/users/level',function() {
		return view('admin/users/users_level');
	});
	//用户资源路由
	Route::resource('/users','admin\UsersController');

});

//=================张大仙====================
Route::resource('/admin/orders','Admin\OrdersController'); 	//订单资源路由
Route::any('/orders/info/{id}','Admin\OrdersinfoController@index'); 	//订单详情路由
Route::get('/fahuo','Admin\PublicController@fahuo');		//发货AJAX传值	


