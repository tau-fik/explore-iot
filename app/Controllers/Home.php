<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data=[
            'title' => 'Dashboard'
        ];
        return view('dashboard/index',$data);

        $data = $this->request->getGet('jam');
        $data =$data?$data:Date("m");
        return view('index');
    }
}


