<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use App\Models\Ina2Model;

class Ina2Api extends ResourceController
{
    public function __construct()
    {
        $this->modelIna2 = new Ina2Model;
    }
    public function insert($volt,$arus)
    {
        $data = [
            'data_volt' => $volt,
            'data_arus' => $arus
        ];
        $this->modelIna2->save($data);

        return $this->respond(['statuss'=>'data berhasil di tambahkan']);
    }

    // ...
}