<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('auth')->group(function () {
    Route::get('dashboard', 'DashboardController@index')->name('dashboard');
});

Route::get('login', 'AuthController@showLoginForm')->name('login');
Route::post('login', 'AuthController@login');
