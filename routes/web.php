<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfileController;

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

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/dashboard/basis-pengetahuan', function () {
        return view('basis-pengetahuan');
    })->name('basis-pengetahuan');

    Route::get('/dashboard/basis-pengetahuan/reset-password-siakad', function () {
        return view('reset-password-siakad');
    })->name('basis-pengetahuan.reset-password-siakad');

    // Category routes
    Route::get('/dashboard/basis-pengetahuan/sistem-akademik', function () {
        return view('kb-sistem-akademik');
    })->name('basis-pengetahuan.sistem-akademik');

    Route::get('/dashboard/basis-pengetahuan/sistem-informasi', function () {
        return view('kb-sistem-informasi');
    })->name('basis-pengetahuan.sistem-informasi');

    Route::get('/dashboard/basis-pengetahuan/jaringan-wifi', function () {
        return view('kb-jaringan-wifi');
    })->name('basis-pengetahuan.jaringan-wifi');

    Route::get('/dashboard/basis-pengetahuan/akun-institusi', function () {
        return view('kb-akun-institusi');
    })->name('basis-pengetahuan.akun-institusi');

    // Article Details
    Route::get('/dashboard/basis-pengetahuan/koneksi-wifi', function () {
        return view('kb-koneksi-wifi');
    })->name('basis-pengetahuan.kb-koneksi-wifi');

    Route::get('/dashboard/basis-pengetahuan/error-elearning', function () {
        return view('kb-error-elearning');
    })->name('basis-pengetahuan.kb-error-elearning');

    Route::get('/dashboard/basis-pengetahuan/daftar-email', function () {
        return view('kb-daftar-email');
    })->name('basis-pengetahuan.kb-daftar-email');

    Route::get('/dashboard/basis-pengetahuan/isi-krs', function () {
        return view('kb-isi-krs');
    })->name('basis-pengetahuan.kb-isi-krs');

    Route::get('/dashboard/basis-pengetahuan/cek-khs', function () {
        return view('kb-cek-khs');
    })->name('basis-pengetahuan.kb-cek-khs');

    Route::get('/dashboard/basis-pengetahuan/sinkron-elearning', function () {
        return view('kb-sinkron-elearning');
    })->name('basis-pengetahuan.kb-sinkron-elearning');

    Route::get('/dashboard/basis-pengetahuan/presensi-online', function () {
        return view('kb-presensi-online');
    })->name('basis-pengetahuan.kb-presensi-online');

    Route::get('/dashboard/basis-pengetahuan/request-ip', function () {
        return view('kb-request-ip');
    })->name('basis-pengetahuan.kb-request-ip');

    Route::get('/dashboard/basis-pengetahuan/kuota-penyimpanan', function () {
        return view('kb-kuota-penyimpanan');
    })->name('basis-pengetahuan.kb-kuota-penyimpanan');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::put('/profile', [ProfileController::class, 'update'])->name('profile.update');
});