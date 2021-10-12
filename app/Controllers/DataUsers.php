<?php

namespace App\Controllers;

use App\Models\UsersModel;

class DataUsers extends BaseController
{
    public function __construct()
    {
        $this->statusLogin();
        $this->userModel = new UsersModel;
    }
    public function index()
    {
        $user = $this->userModel->findAll();
        $user_login = $this->userModel->where('id', session()->get('id'))->first();
        $data = [
            'title' => 'Users',
            'user' => $user,
            'user_login' => $user_login,
            'validation' => \Config\Services::validation()
        ];
        return view('datausers/index', $data);
    }

    public function register()
    {
        $rules      = $this->userModel->validationRules;

        if (!$this->validate($rules)) {
            return redirect()->to('/DataUsers')->withInput();
        }
        $nama       = $this->request->getPost('nama');
        $username   = $this->request->getPost('username');
        $email      = $this->request->getPost('email');
        $password   = $this->request->getPost('password');
        $permision  = $this->request->getPost('permision');

        $password_hash = password_hash($password, PASSWORD_BCRYPT);

        $dataRegister = [
            'nama'      => $nama,
            'username'  => $username,
            'email'     => $email,
            'permision' => $permision,
            'password'  => $password_hash,
        ];

        $this->userModel->register($dataRegister);
        session()->setFlashdata('pesan', 'Data berhasil di tambahkan.');
        return redirect()->to('/DataUsers');
    }

    public function reset($id)
    {
        $data = [
            'id' => $id,
            'password' => password_hash('12345678', PASSWORD_BCRYPT),
        ];
        $this->userModel->resetPwd($data);
        return redirect()->to('/DataUsers');
    }

    public function delete($id = false)
    {
        $this->userModel->delete($id);
        session()->setFlashdata('pesan', 'Data berhasil di hapus');
        return redirect()->to('/DataUsers');
    }
}
