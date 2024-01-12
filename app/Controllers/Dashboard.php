<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    public function index()
    {
        if (isset($this->session) && !empty($this->session->get('user_logged_in'))) {
            $this->data['title'] = 'Usuários';
            $this->data['subtitle'] = 'Listagem';
            $this->data['user_logged_in'] = $this->session->get('user_logged_in') ?? null;
            return view('gerenciador/dashboard/index', $this->data);
        }

        return redirect()->to(base_url('/gerenciador'));
    }
}
