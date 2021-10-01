<?php

namespace App\Models;

use CodeIgniter\Model;

class Ina2Model extends Model
{
    protected $table    = 'sensor_ina2';
    protected $primaryKey = 'id';
    protected $useTimestamps = true;

    protected $allowedFields = ['id', 'data_volt', 'data_arus']; 
}
