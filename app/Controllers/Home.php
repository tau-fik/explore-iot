<?php

namespace App\Controllers;

use App\Models\Ina1Model;
use App\Models\Ina2Model;
use App\Models\AnemometerModel;
use App\Models\BateraiModel;

class Home extends BaseController
{

    public function __construct()
    {
        $this->modelIna1 = new Ina1Model;
        $this->modelIna2 = new Ina2Model;
        $this->modelAnemo = new AnemometerModel;
        $this->modelBat = new BateraiModel;
    }

    public function index()
    {
        $data = [
            'title' => 'Dashboard',
            'statis_ina1' => $this->modelIna1->getStatisticIna1(),
            'statis_ina2' => $this->modelIna2->getStatisticIna2(),
            'statis_anemo' => $this->modelAnemo->getStatisticAnemo(),
            'statis_baterai' => $this->modelBat->getStatisticBaterai()
        ];
        return view('dashboard/index', $data);
    }
}
