<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    private string $title = 'DEACI4DEV WEB ';
    public function index()
    {
        $session = \Config\Services::session();

        $data['title'] = $this->title . "DASHBOARD";
        $data['session'] = $session;
        $data['message'] = $session->getFlashdata('message');
        $data['email'] = $session->get('email');
        $data['token'] = $session->get('token');
        $data['isLogin'] = $session->get('isLogin');

        if (!$data['isLogin']) {
            return redirect()->to('/login');
        }

        return view('templates/header', $data) . view('dashboard/index', $data) . view('templates/footer');
    }
}