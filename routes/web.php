<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/logout', function () {
    Auth::logout();
    return view('userLogin');
})->name('logout');
Route::get('/', [UserController::class, 'showHomePage']);
Route::get('/show-registration-form', [UserController::class, 'showRegistrationForm'])->name('showRegistration');
Route::post('/registration', [UserController::class, 'registerUser'])->name('registration');
Route::get("/show-login", [UserController::class, 'showLogin'])->name('showLogin');
Route::post("/showLogin", [UserController::class, 'userLogin'])->name('userLogin');
Route::get('/show-product-form', [ProductController::class, 'showProductForm'])->name('showProductForm');
