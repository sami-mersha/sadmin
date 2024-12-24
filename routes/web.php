<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

// Import rute untuk user
require __DIR__.'/user.php';

// Import rute untuk admin
require __DIR__.'/admin.php';

// Import rute untuk autentikasi
require __DIR__.'/auth.php';