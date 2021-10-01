<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use App\Models\AnemometerModel;

class AnemometerApi extends ResourceController
{
    public function __construct()
    {
        $this->modelAnemometer = new AnemometerModel;
    }
    public function insert($anemometer)
    {
        $data = [
            'data_anemometer' => $anemometer
        ];
        $this->modelAnemometer->save($data);

        return $this->respond(['statuss'=>'data berhasil di tambahkan']);
    }

    // ...
}