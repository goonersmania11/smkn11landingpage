<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\JurusanController;
use App\Http\Controllers\Admin\GuruController;
use App\Http\Controllers\Admin\EkstrakurikulerController;
Route::get('/', function () {
    return view('welcome');
});
//route master-data
Route::resource('jurusan', JurusanController::class);
Route::resource('guru', GuruController::class);
Route::resource('ekstrakurikuler', EkstrakurikulerController::class);

// Halaman utama (Publik/Landing Page)
Route::get('/', function () {
    return view('welcome');
});

// Dashboard untuk User biasa (bawaan Breeze)
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Manajemen Profil User (bawaan Breeze)
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Grup rute khusus Admin
Route::middleware(['auth', 'role:admin'])->prefix('admin')->name('admin.')->group(function () {
    
    // URL: /admin/dashboard
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');
    
});

// Memuat rute untuk Login, Register, Logout, dll (sekarang file ini sudah ada)
require __DIR__.'/auth.php';

