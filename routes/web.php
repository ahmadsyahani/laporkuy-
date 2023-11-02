<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('users/home');
})->name('home');

Route::get('/laporan', function () {
    return view('users/laporan');
})->name('laporan');

Route::get('/login', function () {
    return view('users/auth/login');
})->name('login');

Route::get('/register', function () {
    return view('users/auth/register');
})->name('register');