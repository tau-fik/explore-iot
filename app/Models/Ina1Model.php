<?php

namespace App\Models;

use CodeIgniter\Model;

class Ina1Model extends Model
{
    protected $table    = 'sensor_ina1';
    protected $primaryKey = 'id';
    protected $useTimestamps = true;

    protected $allowedFields = ['id', 'data_volt', 'data_arus'];

    public function getLimit($limit)
    {
        $builder = $this->table($this->table)
            ->limit($limit)
            ->orderBy($this->primaryKey, 'DESC')
            ->get()->getResultArray();
        return $builder;
    }
    public function getStatisticIna1()
    {
        $db = \Config\Database::connect();
        //$query = $db->query("select TIME(created_at) as time, battery, id from battery");
        $query = $db->query("SELECT * FROM (SELECT TIME(created_at) as time, data_volt, data_arus, id FROM sensor_ina1 ORDER BY id DESC LIMIT 6) sub ORDER BY id ASC");
        //dd($query->getResultArray());
        return $query->getResultArray();
    }
}
