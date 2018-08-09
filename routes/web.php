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
//============后台=================
Route::resource('/admin/orders','Admin\OrdersController'); 		//后台订单资源路由
Route::any('/orders/info/{id}','Admin\OrdersController@info'); 	//后台订单详情路由
Route::get('/fahuo','Admin\PublicController@fahuo');			//后台订单发货AJAX传值

//============前台=================
Route::resource('/home/orders','Home\Orders\OrdersController');		//前台订单资源路由
Route::resource('/home/orderspay','Home\Orders\PayController');		//订单结算资源路由
Route::any('/home/ordersaddr','Home\Orders\PayController@addr');		//收货地址路由
Route::any('/home/deladdr/{id}','Home\Orders\PayController@deladdr');	//删除地址路由
Route::any('home/cart','Home\Orders\PayController@cart');				//购物车地址路由



