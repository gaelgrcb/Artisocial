<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('principal');
});

Route::get('/registro', function (){
    return view('register');
});

Route::get('/login', function(){
    return view(('login'));
});
