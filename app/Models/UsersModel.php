<?php

namespace App\Models;

use CodeIgniter\Model;

class UsersModel extends Model
{
    protected $table    = 'users';
    protected $primaryKey = 'id';
    protected $useTimestamps = true;

    protected $allowedFields = [
        'nama',
        'username',
        'email',
        'permision',
        'password',
    ];

    protected $validationRules = [
        'nama'      => 'required',
        'username'  => 'required|alpha_numeric_space|min_length[3]',
        'email'     => 'required|valid_email|is_unique[users.email]',
        'password'  => 'required|min_length[8]',
    ];


    public function resetPwd($data)
    {
        $builder = $this->table($this->table)
            ->set('password', $data['password'])
            ->where('id', $data['id'])
            ->update();
        return ($builder) ? true : false;
    }

    public function register($data = null)
    {
        $builder = $this->table($this->table)
            ->insert($data);
    }

    public function cek_login($user)
    {
        $query = $this->table($this->table)
            ->where('email', $user)
            ->orWhere('username', $user)
            ->countAll();

        if ($query > 0) {
            $hasil = $this->table($this->table)
                ->where('email', $user)
                ->orWhere('username', $user)
                ->limit(1)
                ->get()
                ->getRowArray();
        } else {
            $hasil = array();
        }
        return $hasil;
    }
}
