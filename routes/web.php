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
    return view('home/index');
});

Route::group([],function(){
	Route::get('/admin','admin\AdminController@index');//后台的首页
	Route::get('/admin/{id}/status','admin\AdminController@status');//商品上架下架

<<<<<<< HEAD
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
	//验证密码
	Route::post('/users/dopass/{id}','admin\UsersinfoController@dopass');
	//用户资源路由
	Route::resource('/users','admin\UsersController');

});


//=================张大仙====================
Route::resource('/admin/orders','Admin\OrdersController'); 	//订单资源路由
Route::any('/orders/info/{id}','Admin\OrdersinfoController@index'); 	//订单详情路由
Route::get('/fahuo','Admin\PublicController@fahuo');		//发货AJAX传值	



Route::any('/checkuname','admin\AjaxController@checkuname');

Route::any('/users/dels','admin\AjaxController@delusers');

Route::any('/users/show/{id}','admin\UsersinfoController@show');
=======
	
	Route::resource('/cate','admin\CateController');//商品类别的整体增删改查
	Route::resource('/goods','admin\GoodsController');//商品整体的增删改查
});
>>>>>>> origin/huanghuan3547
