<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\JurusanController;
use App\Http\Controllers\Admin\GuruController;
use App\Http\Controllers\Admin\EkstrakurikulerController;
Route::get('/', function () {
    return view('welcome');
});
Route::resource('jurusan', JurusanController::class);
Route::resource('guru', GuruController::class);
Route::resource('ekstrakurikuler', EkstrakurikulerController::class);
