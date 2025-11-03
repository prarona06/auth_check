<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
Route::middleware('guest')->group(function(){
// Registration page
Route::get('/', [AuthController::class, 'registerView'])->name('register.view');
Route::post('/register', [AuthController::class, 'registerSubmit'])->name('register.submit');
});
// Login page
Route::get('/login', [AuthController::class, 'loginView'])->name('login.view');
Route::post('/login', [AuthController::class, 'loginSubmit'])->name('login.submit');

// Home page
Route::get('/home', [AuthController::class, 'index'])->name('home');
//logout page
Route::get('/logout',[AuthController::class,'logout'])->name('logout');
