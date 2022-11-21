<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        return view('client.auth.login');
    }



    public function methodLogin(Request $request)
    {
        return view('client.auth.login');
    }



    public function register()
    {
        return view('client.auth.register');
    }



    public function methodRegister(Request $request)
    {
        return view('client.auth.register');
    }


    public function forgot()
    {
        return view('client.auth.forgot');
    }
}
