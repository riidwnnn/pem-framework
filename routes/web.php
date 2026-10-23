<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\DashboardController;

Route::get('/', [App\Http\Controllers\BerandaController::class, 'index'])->name('beranda'); 
    

//Admin Routes
Route::prefix('admin')->name('admin.')->group(function(){
    Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('login', [LoginController::class, 'login'])->name('login.submit');
    Route::post('logout', [LoginController::class, 'logout'])->name('logout');

  Route::middleware(['is_admin'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    });

});

Route::get('/', function () {
    return view('beranda');
});

Route::get('/beranda', function () {
    return view('beranda');
});

Route::get('/datadiri', function () {
    return view('datadiri');
});


Route::resource('aktivitas', App\Http\Controllers\AktivitasController::class)->parameters([
    'aktivitas' => 'aktivitas'
])->names([
    'index' => 'aktivitas',
    'create' => 'aktivitas.create',
    'store' => 'aktivitas.store',
    'edit' => 'aktivitas.edit',
    'update' => 'aktivitas.update',
    'destroy' => 'aktivitas.destroy',
    'show' => 'aktivitas.show',

]);


Route::get('/kontak', function () {
    return view('kontak');
});

Route::get('/kontak/hubungi', function () {
    return view('hubungi');
});

Route::get('/profile',[App\Http\Controllers\ProfileController::class, 'index']);