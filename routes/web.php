<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('login', function () {
    return view('login/login');
});
Route::get('register', function () {
    return view('register/register');
});
Route::get('blog', function () {
    return view('blog');
});
