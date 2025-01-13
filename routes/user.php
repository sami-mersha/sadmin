<?php

use App\Http\Controllers\FrontController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\KonserController;
use App\Http\Controllers\TiketController;

// Rute yang dapat diakses oleh semua user (guest dan login)
Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/dashboard', [FrontController::class, 'index'])->name('dashboard');
});

// Rute untuk melihat konser dan tiket (read-only)

Route::get('/konser/{konser}', [KonserController::class, 'show'])->name('konser.show');
Route::get('/tiket', [TiketController::class, 'index'])->name('tiket.index');
Route::get('/tiket/{tiket}', [TiketController::class, 'show'])->name('tiket.show');


Route::get('/lainnya', function () {
    return view('profile.detail-profile');
});