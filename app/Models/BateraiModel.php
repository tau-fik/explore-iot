<?php

namespace App\Models;

use CodeIgniter\Model;

class BateraiModel extends Model
{
    protected $table    = 'sensor_baterai';
    protected $primaryKey = 'id';
    protected $useTimestamps = true;

    protected $allowedFields = ['id', 'data_baterai',];

    public function getLimit($limit)
    {
        $builder = $this->table($this->table)
            ->limit($limit)
            ->orderBy($this->primaryKey, 'DESC')
            ->get()->getResultArray();
        return $builder;
    }

    public function getStatisticBaterai()
    {

        $builder = $this->table($this->table)
            ->select('data_baterai')->get()->getLastRow();
        //dd($builder);
        return $builder;
    }
}
