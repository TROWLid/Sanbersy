<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register() {
    	return view('register');
    }

	// public function welcome_post(Request $request) {
	// 	$nama1 = $request["sfname"];
	// 	$nama2 = $request["slname"];

 //    	return view('welcome');
 //    }    

    public function welcome() {
    	return view('welcome');
    }
}
