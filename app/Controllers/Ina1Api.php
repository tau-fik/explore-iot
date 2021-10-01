<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use App\Models\Ina1Model;

class Ina1Api extends ResourceController
{
    public function __construct()
    {
        $this->modelIna1 = new Ina1Model;
    }
    public function insert($volt,$arus)
    {
        $data = [
            'data_volt' => $volt,
            'data_arus' => $arus
        ];
        $this->modelIna1->save($data);

        return $this->respond(['statuss'=>'data berhasil di tambahkan']);
    }

    // ...
}