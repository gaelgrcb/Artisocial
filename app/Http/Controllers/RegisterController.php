<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index(){
        return view('auth.register');
    }

    public function store(Request $request){
        //validaciones
        $this->validate($request, [
            'name' => 'required|min:4',
            'username' => 'required|unique:users|min:5|max:30',
            'email' => 'required|email|max:50|unique:users',
            'password' => 'required|min:8|confirmed',
            'password_confirmation' => 'required|confirmed|min:6',
        ]);

    }
}

