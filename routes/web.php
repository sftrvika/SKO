<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('login', function () {
    return view('loginuser');
});
Route::get('blog', function () {
    return view('blog');
});
