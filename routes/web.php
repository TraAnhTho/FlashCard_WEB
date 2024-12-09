<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginController;
use App\Http\Controllers\registerController;


Route::get('/login', [loginController::class, 'dangnhap']);
Route::post('/login/postdangnhap', [loginController::class, 'postdangnhap']);
Route::get('/register', [registerController::class, 'dangki']);
Route::post('/register/postdangki', [registerController::class, 'postdangki']);

Route::get('/', function () {
    return view('pages/index');
});

// Route::get('/register', function () {
//     return view('pages/register');
// });
// Route::get('/login', function () {
//     return view('pages/login');
// });
Route::get('/premium', function () {
    return view('pages/premium');
});
Route::get('/homes', function () {
    return view('pages/homes');
})->name('homes');
Route::get('/create', function () {
    return view('pages/create');
});
Route::get('/learn', function () {
    return view('pages/learn');
});

// Auth::routes();
// Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
