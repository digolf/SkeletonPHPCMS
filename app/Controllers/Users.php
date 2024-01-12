<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\User;

class Users extends BaseController
{
    public function index()
    {
        $userModel = new User();
        $this->data['title'] = 'Usuários';
        $this->data['subtitle'] = 'Controle de acesso';
        $this->data['users'] = $userModel->getAll();

        return view('gerenciador/dashboard/users/index', $this->data);
    }

    public function add()
    {
        $this->data['title'] = 'Usuários';
        $this->data['subtitle'] = 'Adicionar usuário';

        $postInfo = $this->request->getPost();
        if (!empty($postInfo['name']) &&
            !empty($postInfo['phone']) &&
            !empty($postInfo['email']) &&
            !empty($postInfo['active']) &&
            !empty($postInfo['new_pass']) &&
            !empty($postInfo['new_pass_confirmation']))  {
            $userModel = new User();
            $user = $userModel->get($postInfo);
            if (empty($user)) {
                $userModel->insertNewUser($postInfo);
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
        $userModel = new User();
        $this->data['user'] = $userModel->getById($userId);

        $postInfo = $this->request->getPost();
        if (!empty($postInfo))  {
            $userModel->edit($postInfo, $userId);
            $this->data['user_updated'] = True;
            $this->data['user'] = $userModel->getById($userId);

            return view('gerenciador/dashboard/users/edit', $this->data);
        }

        return view('gerenciador/dashboard/users/edit', $this->data);
    }

    public function delete()
    {
        $userId = $this->request->getPost('user_id');
        $userModel = new User();
        $userModel->delete($userId);
        $users = $userModel->getAll();
        return json_encode($users);
    }
}