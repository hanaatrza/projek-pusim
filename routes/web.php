<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('beranda');
});

Route::get('/profil', function () {
    return view('profil');
});

Route::get('/layanan', function () {
    return view('layanan');
});

Route::get('/panduan', function () {
    return view('panduan');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');