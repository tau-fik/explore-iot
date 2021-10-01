<?php

namespace App\Models;

use CodeIgniter\Model;

class BateraiModel extends Model
{
    protected $table    = 'sensor_baterai';
    protected $primaryKey = 'id';
    protected $useTimestamps = true;

    protected $allowedFields = ['id', 'data_baterai',]; 
}
