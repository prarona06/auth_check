<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;


Route::get('/',[AuthController::class,'register'])->name('register.view');
Route::get('/login',[AuthController::class,'login'])->name('login.view');



