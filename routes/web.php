<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landing.index');
})->name('home');
Route::view('/', 'landing.index')->name('home');
Route::view('/features', 'pages.features')->name('features');
Route::view('/about', 'pages.about')->name('about');

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/register', function () {
    return view('auth.register');
})->name('register');

Route::get('/forgot-password', function () {
    return view('auth.forgot-password');
})->name('password.request');

Route::get('/terms', function () {
    return view('pages.terms');
})->name('terms');

Route::get('/privacy', function () {
    return view('pages.privacy');
})->name('privacy');

Route::get('/dashboard', function () {
    return view('dashboard.index');
})->name('dashboard');
