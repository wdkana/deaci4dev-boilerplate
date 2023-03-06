<?php

namespace App\Controllers;

use CodeIgniter\HTTP\Request;

class User extends BaseController
{
    private string $title = 'DEACI4DEV USER ';

    public function login()
    {
        $session = \Config\Services::session();

        if ($session->get('isLogin')) {
            return redirect()->to('/dashboard');
        }

        $data['title'] = $this->title . 'LOGIN';
        $data['session'] = $session;
        $data['message'] = $session->getFlashdata('message');

        return view('templates/header', $data) . view('form/login', $data) . view('templates/footer');
    }

    public function logout()
    {
        $session = \Config\Services::session();
        $session->destroy();
        $session->setFlashdata('message', 'please come again later 😘');
        return redirect()->to('/');
    }

    public function register()
    {
        $session = \Config\Services::session();

        $data['title'] = $this->title . 'REGISTER';
        $data['session'] = $session;
        $data['message'] = $session->getFlashdata('message');

        return view('templates/header', $data) . view('form/register') . view('templates/footer');
    }

    public function login_auth()
    {
        $userModel = new \App\Models\UserModel();
        $session = \Config\Services::session();

        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');

        $user = $userModel->where('email', $email)->first();

        if (!empty($user['email']) && password_verify($password, $user['password'])) {
            $session->set('isLogin', true);
            $session->set('email', $email);
            $session->set('token', $user['token']);

            $session->setFlashdata('message', 'welcome back! 😘');
            return redirect()->to('/dashboard');
        } else {
            $session->setFlashdata('message', 'sorry your account is invalid 😢');
            return redirect()->back();
        }
    }

    public function register_auth()
    {
        $userModel = new \App\Models\UserModel();
        $session = \Config\Services::session();

        $token = rand(1000000, 9999999);
        $password = password_hash($this->request->getVar('password'), PASSWORD_DEFAULT);

        $data = [
            'email' => $this->request->getVar('email'),
            'password' => $password,
            'token' => $token
        ];

        $addUser = $userModel->insert($data);

        if ($addUser) {
            $session->setFlashdata('message', 'thanks for registrating here 😍');
            return redirect()->to('/login');
        } else {
            $session->setFlashdata('message', 'please try again later 😢');
            return redirect()->back();
        }
    }
}