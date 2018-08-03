<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
	//登录页
    public function login () 
    {

    	return view('admin/login');
    }
    //登录验证
    public function dologin () 
    {
    	//
    }
}
