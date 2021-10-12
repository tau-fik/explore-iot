<?php

namespace App\Controllers;

use App\Models\UsersModel;

class Login extends BaseController
{

    public function __construct()
    {
        $this->userModel = new UsersModel;
    }

    public function index()
    {
        return view('login/login');
    }

    public function logout()
    {
        $remove_session = ['id', 'permision'];
        session()->remove($remove_session);
        return redirect()->to('/Login');
    }

    public function login()
    {
        $user      = $this->request->getVar('username');
        $password   = $this->request->getVar('password');

        $cek_login = $this->userModel->cek_login($user);

        if (!$cek_login) {
            return redirect()->to('/Login');
        }

        if (password_verify($password, $cek_login['password'])) {
            $start_session = [
                'id' => $cek_login['id'],
                'permision' => $cek_login['permision']
            ];
            session()->set($start_session);
            return redirect()->to('/');
        } else {
            return redirect()->to('/Login');
        }
    }
}
