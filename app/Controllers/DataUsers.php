<?php

namespace App\Controllers;

class DataUsers extends BaseController
{
    public function index()
    {
        $data=[
            'title' => 'Users'
        ];
        return view('datausers/index',$data);
    }
}


