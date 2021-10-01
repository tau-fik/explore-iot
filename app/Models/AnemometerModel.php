<?php

namespace App\Models;

use CodeIgniter\Model;

class AnemometerModel extends Model
{
    protected $table    = 'sensor_anemometer';
    protected $primaryKey = 'id';
    protected $useTimestamps = true;

    protected $allowedFields = ['id', 'data_anemometer',]; 
}
