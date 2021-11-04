<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index(){
        return view('home');
    }
    public function forgot(){
        return view('forgot');
    }
    public function show($user){
        return view('profile',['user' => $user]);
    }
}
