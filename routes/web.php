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

Route::get('/', function () {
    return view('welcome');
});

//=================张大仙====================
Route::resource('/admin/orders','Admin\OrdersController'); 	//订单资源路由
Route::any('/orders/info/{id}','Admin\OrdersinfoController@index'); 	//订单详情路由
Route::get('/fahuo','Admin\PublicController@fahuo');		//发货AJAX传值	

