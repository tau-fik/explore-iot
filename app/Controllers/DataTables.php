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
        $data_ina1   = $this->modelIna1->paginate(10);
        $ina1_pager  = $this->modelIna1->pager;
        $data_ina2   = $this->modelIna2->paginate(10);
        $ina2_pager  = $this->modelIna2->pager;
        $data_anemo  = $this->modelAnemo->paginate(10);
        $anemo_pager = $this->modelAnemo->pager;
        $data_bat    = $this->modelBat->paginate(10);
        $bat_pager   = $this->modelBat->pager;


        $data = [
            'title'         => 'Tabel Data',
            'ina1'          => $data_ina1,
            'ina1_pager'    => $ina1_pager,
            'ina2'          => $data_ina2,
            'ina2_pager'    => $ina2_pager,
            'anemo'         => $data_anemo,
            'anemo_pager'   => $anemo_pager,
            'bat'           => $data_bat,
            'bat_pager'     => $bat_pager,
        ];
        return view('datatables/index', $data);
    }
}
