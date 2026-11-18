<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;

// Halaman Home
Route::get('/', function () {
    return view('home');
});

// Halaman Data Siswa 
Route::get('/siswa', [SiswaController::class, 'index']);

// Halaman About
Route::get('/about', function () {
    return view('about');
});

Route::get('/kontak', function () {
    return view('kontak');
});

