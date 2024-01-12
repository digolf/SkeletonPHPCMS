<?php

namespace App\Controllers;

class Profile extends BaseController
{
    public function index()
    {
        $this->data['title'] = 'Meu perfil';
        $this->data['subtitle'] = 'Configurações';
        return view('gerenciador/dashboard/profile/index', $this->data);
    }
}
