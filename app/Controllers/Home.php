<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('components/header')
            . view('components/nav')
            . view('pages/home')
            . view('components/footer');
    }
}
