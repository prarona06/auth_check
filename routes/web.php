<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

// Registration page
Route::get('/', [AuthController::class, 'registerView'])->name('register.view');
Route::post('/register', [AuthController::class, 'registerSubmit'])->name('register.submit');

// Login page
Route::get('/login', [AuthController::class, 'loginView'])->name('login.view');
Route::post('/login', [AuthController::class, 'loginSubmit'])->name('login.submit');


