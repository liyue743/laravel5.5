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
//网站首页
Route::get('/', function () {
    return view('home.index');
});


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

	Route::any('/admins','admin\AdminController@index'); //后台首页
	Route::resource('/admins/users','Admin\UsersController');//管理员
});