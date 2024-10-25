<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/', [UserController::class, 'showHomePage']);
Route::get('/show-registration-form', [UserController::class, 'showRegistrationForm'])->name('showRegistration');
Route::post('/registration', [UserController::class, 'registerUser'])->name('registration');
Route::get("/show-login", [UserController::class, 'showLogin'])->name('showLogin');
Route::post("/showLogin", [UserController::class, 'userLogin'])->name('userLogin');
