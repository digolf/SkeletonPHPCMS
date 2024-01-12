<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\User;

class Users extends BaseController
{
    function __construct()
    {
        // Models
        $this->userModel = new User();
    }

    public function index()
    {
        $this->data['title'] = 'Usuários';
        $this->data['subtitle'] = 'Controle de acesso';
        $this->data['users'] = $this->userModel->getAll();
        $this->data['user_logged_in'] = $this->session->get('user_logged_in') ?? null;

        return view('gerenciador/dashboard/users/index', $this->data);
    }

    public function add()
    {
        $this->data['title'] = 'Usuários';
        $this->data['subtitle'] = 'Adicionar usuário';
        $this->data['user_logged_in'] = $this->session->get('user_logged_in') ?? null;

        $postInfo = $this->request->getPost();
        if (!empty($postInfo['name']) &&
            !empty($postInfo['phone']) &&
            !empty($postInfo['email']) &&
            !empty($postInfo['active']) &&
            !empty($postInfo['new_pass']) &&
            !empty($postInfo['new_pass_confirmation']))  {
            $user = $this->userModel->get($postInfo);
            if (empty($user)) {
                $this->userModel->insertNewUser($postInfo);
                $this->data['inserted'] = True;
            } else {
                $this->data['user_already_exists'] = True;
            }

            return view('gerenciador/dashboard/users/add', $this->data);
        }

        return view('gerenciador/dashboard/users/add', $this->data);
    }

    public function edit($userId)
    {
        $this->data['title'] = 'Usuários';
        $this->data['subtitle'] = 'Editar usuário';
        $this->data['user'] = $this->userModel->getById($userId);

        $postInfo = $this->request->getPost();
        if (!empty($postInfo))  {
            $this->userModel->edit($postInfo, $userId);
            $this->data['user_updated'] = True;
            $this->data['user'] = $this->userModel->getById($userId);

            return view('gerenciador/dashboard/users/edit', $this->data);
        }

        return view('gerenciador/dashboard/users/edit', $this->data);
    }

    public function delete()
    {
        $userId = $this->request->getPost('user_id');
        $this->userModel->delete($userId);
        $users = $this->userModel->getAll();
        return json_encode($users);
    }
}