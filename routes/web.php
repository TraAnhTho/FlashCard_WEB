<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages/index');
});

Route::get('/register', function () {
    return view('pages/register');
});
Route::get('/login', function () {
    return view('pages/login');
});
Route::get('/premium', function () {
    return view('pages/premium');
});
