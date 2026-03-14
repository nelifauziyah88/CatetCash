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


