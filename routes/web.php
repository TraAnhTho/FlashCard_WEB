<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginController;
use App\Http\Controllers\registerController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\createController;
use App\Http\Controllers\userController;
use Illuminate\Support\Facades\DB;



Route::get('/', function () { 
    return view('pages/index');
});
Route::get('/login', [loginController::class, 'dangnhap'])->name('login');
Route::post('/login/postdangnhap', [loginController::class, 'postdangnhap'])->name('login.postdangnhap');
Route::get('/register', [registerController::class, 'dangki']);
Route::post('/register/postdangki', [registerController::class, 'postdangki']);
Route::get('/premium', function () {
    return view('pages/premium');
});
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/create', [createController::class, 'showCreateForm'])->name('create');
Route::post('/create/store', [createController::class, 'store'])->name('store.flashcard');
//----------------------------------------------------------------------


Route::get('/learn', function () {
    return view('pages/learn');
});
Route::get('/blog', function () {
    return view('pages/blog');
});
Route::get('/users', [userController::class, 'index'])->name('users');
Route::post('/users/updateImg', [userController::class, 'updateImg'])->name('users.updateImg');
Route::post('/users/UpdateUser', [userController::class, 'UpdateUser'])->name('users.UpdateUser');




