<?php

use Illuminate\Support\Facades\Route;



Route::controller('App\Http\Controllers\Auth\AuthController')->group(function () {
    Route::get('/register', 'register_show')->name('register_show')->middleware('guest');
    Route::get('/login', 'login_show')->name('login_show');
    Route::POST('/register', 'register')->name('register');
    Route::POST('/login', 'login')->name('login');

    Route::POST('/logout', 'logout')->name('logout');
});

Route::prefix('admin')->group(function () {
    Route::controller('App\Http\Controllers\Back\IndexController')->group(function () {
        Route::get('/', 'show');
    });
});

Route::get('/', function () {
    return view('index');
});
