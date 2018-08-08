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

Route::group([],function(){
	Route::get('/admin','admin\AdminController@index');//后台的首页
	Route::get('/admin/{id}/status','admin\AdminController@status');//商品上架下架

	
	Route::resource('/cate','admin\CateController');//商品类别的整体增删改查
	Route::resource('/goods','admin\GoodsController');//商品整体的增删改查
});