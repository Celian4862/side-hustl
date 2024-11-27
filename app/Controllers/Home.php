<?php

namespace App\Controllers;

use CodeIgniter\Exceptions\PageNotFoundException;

class Home extends BaseController
{
  public function index(): string
 {
  return view('components/header')
    . view('components/nav')
    . view('pages/home')
    . view('components/footer');
  }
    
  public function login() {
    if (session()->has('user_id')) {
      return redirect('Home::loggedIn');
    }
    return (session()->has('user_id')) ? redirect('Home::loggedIn') :
      view('components/header')
        . view('pages/login')
        . view('components/footer');
  }

  public function register() {
    
  }

  public function loggedIn() {
    if (session()->has('user_id')) {
      return redirect('Home::login');
    }
    return view('components/header')
      . view('pages/logged-in')
      . view('components/footer');
  }
}
