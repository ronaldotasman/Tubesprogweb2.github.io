<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function home(){
        return view('home');
    }
    public function login(){
        return view('login');
    }
    public function register(){
        return view('register');
    }
}
