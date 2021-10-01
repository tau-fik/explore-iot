<?php

namespace App\Controllers;

class Login extends BaseController
{
    public function index()
    {
        return view('login/login');
    }

    public function logout()
    {
        return view('login/login');
    }
}


