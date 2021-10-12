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
        $this->statusLogin();
        $this->ina1Model = new Ina1Model;
        $this->ina2Model = new Ina2Model;
        $this->anemoModel = new AnemometerModel;
        $this->batModel = new BateraiModel;
        // $this->pager = \Config\Services::pager();
    }

    public function index()
    {
        $data_ina1   = $this->ina1Model->getLimit(10);
        $data_ina2   = $this->ina2Model->getLimit(10);
        $data_anemo  = $this->anemoModel->getLimit(10);
        $data_bat    = $this->batModel->getLimit(10);


        $data = [
            'title'         => 'Tabel Data',
            'ina1'          => $data_ina1,
            'ina2'          => $data_ina2,
            'anemo'         => $data_anemo,
            'bat'           => $data_bat,
        ];
        return view('datatables/index', $data);
    }

    public function ina1Delete($id = false)
    {
        $this->ina1Model->delete($id);
        session()->setFlashdata('pesan', 'Data berhasil di hapus');
        return redirect()->to('/DataTables');
    }

    public function ina2Delete($id = false)
    {
        $this->ina2Model->delete($id);
        session()->setFlashdata('pesan', 'Data berhasil di hapus');
        return redirect()->to('/DataTables');
    }

    public function anemoDelete($id = false)
    {
        $this->anemoModel->delete($id);
        session()->setFlashdata('pesan', 'Data berhasil di hapus');
        return redirect()->to('/DataTables');
    }

    public function batDelete($id = false)
    {
        $this->batModel->delete($id);
        session()->setFlashdata('pesan', 'Data berhasil di hapus');
        return redirect()->to('/DataTables');
    }
}
