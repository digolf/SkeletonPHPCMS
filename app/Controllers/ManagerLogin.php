<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\User;

class ManagerLogin extends BaseController
{
    function __construct()
    {
        // Models
        $this->userModel = new User();
    }

    public function index()
    {
        return view('gerenciador/login/index');
    }

    public function login()
    {
        $email = trim($this->request->getPost('username'));
        $password = trim($this->request->getPost('password'));
        $user = $this->userModel->getByEmail($email);

        if (!empty($user)) {
            $password = md5($password . ENCRYPTION_KEY);
            if ($password == $user->password) {
                $this->session->set('user_logged_in', $user);
                return redirect()->to(base_url('/gerenciador/dashboard'));
            }
        }

        $this->data['user_invalid'] = True;
        return view('gerenciador/login/index', $this->data);
    }

    public function logout()
    {
        if ($this->session->get('user_logged_in') !== null) {
            $this->session->set('user_logged_in', null);
        }

        return redirect()->to(base_url('/gerenciador'));
    }
}
