<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use App\Models\BateraiModel;

class BateraiApi extends ResourceController
{
    public function __construct()
    {
        $this->modelBaterai = new BateraiModel;
    }
    public function insert($baterai)
    {
        $data = [
            'data_baterai' => $baterai
        ];
        $this->modelBaterai->save($data);

        return $this->respond(['statuss'=>'data berhasil di tambahkan']);
    }

    // ...
}