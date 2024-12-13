<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginController;
use App\Http\Controllers\registerController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\createController;
use App\Http\Controllers\userController;
use App\Http\Controllers\folderController;
use App\Http\Controllers\editController;
use App\Http\Controllers\learnController;
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

Route::get('/create', [createController::class, 'showCreateForm'])->name('create');
Route::post('/create/store', [createController::class, 'store'])->name('store.flashcard');
//----------------------------------------------------------------------


Route::get('/learn/{malist}', [learnController::class, 'index'])->name('learn');
// Route::get('/learn/flashcards/{malist}', [LearnController::class, 'getFlashcards'])->name('learn.getFlashcards');
// Route để lấy flashcards (nếu bạn sử dụng API)
Route::get('/api/flashcards/{malist}', [learnController::class, 'getFlashcards'])->name('getFlashcards');


Route::get('/admin', function () {
    return view('pages/admin');
});

Route::get('/users', [userController::class, 'index'])->name('users');
Route::post('/users/updateImg', [userController::class, 'updateImg'])->name('users.updateImg');
Route::post('/users/updateUser', [userController::class, 'updateUser'])->name('users.updateUser');
// ----------------------------
Route::get('/folder', [folderController::class, 'index'])->name('folder');
Route::post('/folder/show/{malist}', [folderController::class, 'show'])->name('folder.show');
// ----------------------------------------------------------------
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::post('/home/show/{malist}', [folderController::class, 'show'])->name('home.show');
// ----------------------------------------------------------------
Route::get('/editcard/{malist}', [editController::class, 'index'])->name('editcard');
Route::post('/editcard/store/{malist}', [editController::class, 'store'])->name('editcard.store');

Route::delete('/editcard/flashcard/{macard}', [editController::class, 'deleteFlashcard'])->name('delete.flashcard');

// Route::get('/admin', [adminController::class, 'index'])->name('admin');
Route::post('/admin/postadmin', [adminController::class, 'postadmin'])->name('admin.postadmin');
Route::post('/adminedit', [adminController::class, 'store'])->name('adminedit');

// Route::get('/cards', [Controller::class, 'getCards']);



