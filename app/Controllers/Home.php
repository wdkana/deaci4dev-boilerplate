<?php

namespace App\Controllers;

class Home extends BaseController
{
    private string $title = 'DEACI4DEV WEB ';
    public function index()
    {
        $data['title'] = $this->title . "HOME";
        $data['session'] = \Config\Services::session();

        return view('templates/header', $data) . view('home') . view('templates/footer');
    }
    public function about()
    {
        $data['session'] = \Config\Services::session();
        $data['title'] = $this->title . "ABOUT";
        return view('templates/header', $data) . view('about') . view('templates/footer');
    }
}