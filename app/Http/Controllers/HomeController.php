<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('User.dashboard');
    }

    public function profile()
    {
      return view('User.profile');
    }
}
