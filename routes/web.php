<?php

use Illuminate\Support\Facades\Route;

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