<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('principal');
});

Route::get('/registro', function (){
    return view('auth.register');
});

Route::get('/login', function(){
    return view(('auth.login'));
});
