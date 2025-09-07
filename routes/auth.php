<?php

use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {
    Route::get('login', function () {
        return view('login', ['title' => 'Login']);
    })->name('login');

    Route::get('register', function () {
        return view('register', ['title' => 'Register']);
    })->name('register');

    Route::post('register', [AuthController::class, 'register'])->name('register.post');

    Route::post('login', [AuthController::class, 'login'])->name('login.post');

});

Route::post('logout', [AuthController::class, 'logout'])->name('logout');
