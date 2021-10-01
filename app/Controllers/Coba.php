<?php

namespace App\Controllers;

class Coba extends BaseController
{
    public function index()
    {
        return view('coba/coba');
    }

    public function image()
    {
        return view('coba/image');
    }
}
