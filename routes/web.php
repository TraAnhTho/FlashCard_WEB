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
Route::get('/home', function () {
    return view('pages/home');
});
Route::get('/create', function () {
    return view('pages/create');
});
Route::get('/learn', function () {
    return view('pages/learn');
});
