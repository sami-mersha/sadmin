<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\KonserController;
use App\Http\Controllers\TiketController;

// Rute untuk admin
Route::middleware(['auth', 'role:admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/', function () {
        return view('admin.dashboard');
    })->name('dashboard');

    Route::get('/forms', function () {
        return view('admin.forms');
    })->name('forms');

    Route::get('/tables', function () {
        return view('admin.tables');
    })->name('tables');

    Route::get('/ui-elements', function () {
        return view('admin.ui-elements');
    })->name('ui-elements');
    
    Route::get('/ui-elements-review', function () {
        return view('admin.ui-elements-review');
    })->name('ui-elements-review');
    

    // Manajemen pengguna, peran, dan izin
    Route::resource('users', UserController::class);
    Route::resource('roles', RoleController::class);
    Route::resource('permissions', PermissionController::class);

    // Manajemen konser dan tiket
    Route::get('/konser', [KonserController::class, 'index'])->name('konser.index');
    Route::post('/konser', [KonserController::class, 'store'])->name('konser.store');
    Route::put('/konser/{id}', [KonserController::class, 'update'])->name('konser.update');
    Route::delete('/konser/{id}', [KonserController::class, 'destroy'])->name('konser.destroy');
    // Route::resource('admin/konser', KonserController::class);


    Route::resource('tiket', TiketController::class)->except(['show']);
});
