<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('beranda');
});

Route::get('/beranda', function () {
    return view('beranda');
});

Route::get('/datadiri', function () {
    return view('datadiri');
});

Route::get('/aktivitas', function () {
    return view('aktivitas');
});

Route::get('/kontak', function () {
    return view('kontak');
});

Route::get('/profile',[App\Http\Controllers\ProfileController::class, 'index']);