<?php

use Illuminate\Support\Facades\Route;

Route::get('/dashboard', function () {
    return view('dashboard', ['active' => 'dashboard']);
})->name('dashboard');

Route::get('/users', function () {
    return view('users', ['active' => 'users']);
})->name('users');

Route::get('/settings', function () {
    return view('settings', ['active' => 'settings']);
})->name('settings');