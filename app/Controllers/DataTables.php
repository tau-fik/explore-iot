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
        $this->modelAnemometer = new AnemometerModel;
        $this->modelBaterai = new BateraiModel;

    }

    public function index()
    {
        $data_ina1 = $this->modelIna1->findAll();
        $data_ina2 = $this->modelIna2->findAll();
        $data_anemometer = $this->modelAnemometer->findAll();
        $data_baterai = $this->modelBaterai->findAll();

        $data=[
            'title' => 'Tabel Data',
            'ina1' => $data_ina1,
            'ina2' => $data_ina2,
            'anemometer' => $data_anemometer,
            'baterai' =>$data_baterai,
        ];
        return view('datatables/index',$data);
    }
}


