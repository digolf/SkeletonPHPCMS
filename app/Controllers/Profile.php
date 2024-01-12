<?php

namespace App\Controllers;
use App\Models\User;

class Profile extends BaseController
{
    function __construct()
    {
        // Models
        $this->userModel = new User();
        $this->data['title'] = 'Meu perfil';
        $this->data['subtitle'] = 'Configurações';
        $this->data['user_logged_in'] = null;
    }

    public function index()
    {
        $this->data['user_logged_in'] = $this->session->get('user_logged_in') ?? null;
        return view('gerenciador/dashboard/profile/index', $this->data);
    }

    public function edit() {
        $postInfo = $this->request->getPost();

        if (!empty($postInfo)) {
            if (!empty($postInfo['new_pass']) && !empty($postInfo['new_pass_confirmation'])) {
                if ($postInfo['new_pass'] != $postInfo['new_pass_confirmation']) {
                    $this->data['password_does_not_match'] = True;
                } else {
                        $this->data['success_profile_editing'] = True;
                }
            }
            $this->userModel->edit($postInfo, $this->session->get('user_logged_in')->id);
            $this->data['user_logged_in'] = $this->userModel->getById($this->session->get('user_logged_in')->id);

            return view('gerenciador/dashboard/profile/index', $this->data);
        }
    }
}
