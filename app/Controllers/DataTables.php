<?php

namespace App\Controllers;

use App\Models\Ina1Model;
use App\Models\Ina2Model;
use App\Models\AnemometerModel;
use App\Models\BateraiModel;

class DataTables extends BaseController
{

    public function __construct()
    {
        $this->modelIna1 = new Ina1Model;
        $this->modelIna2 = new Ina2Model;
        $this->modelAnemo = new AnemometerModel;
        $this->modelBat = new BateraiModel;
        // $this->pager = \Config\Services::pager();
    }

    public function index()
    {
        $data_ina1   = $this->modelIna1->getLimit(10);
        $data_ina2   = $this->modelIna2->getLimit(10);
        $data_anemo  = $this->modelAnemo->getLimit(10);
        $data_bat    = $this->modelBat->getLimit(10);


        $data = [
            'title'         => 'Tabel Data',
            'ina1'          => $data_ina1,
            'ina2'          => $data_ina2,
            'anemo'         => $data_anemo,
            'bat'           => $data_bat,
        ];
        return view('datatables/index', $data);
    }
}
