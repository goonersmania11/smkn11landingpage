<?php

use App\Http\Controllers\Admin\ProfileController as AdminProfileController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Models\Profile;

// Halaman utama (Publik/Landing Page)
Route::get('/', function () {
    $profile = Profile::first();
    return view('welcome', compact('profile'));
})->name('home');

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
    
    // CRUD Profil Sekolah
    Route::resource('profiles', AdminProfileController::class);
    
});

// Memuat rute untuk Login, Register, Logout, dll (sekarang file ini sudah ada)
require __DIR__.'/auth.php';