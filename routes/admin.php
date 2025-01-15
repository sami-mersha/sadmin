<?php

use App\Http\Controllers\Admin\PromoController;
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

    Route::name('promo.index')->get('/promo', function () {
        return view('admin.promo.index');
    });

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
    Route::resource('tiket', TiketController::class)->except(['show']);
    // Route::resource('admin/konser', KonserController::class);


    //punyae promo
    Route::resource('promo', PromoController::class);

    Route::get('admin/promo/create', [PromoController::class, 'create'])->name('admin.promo.create');
    Route::post('admin/promo/store', [PromoController::class, 'store'])->name('admin.promo.store');
    Route::get('/admin/promo/{id}/edit', [PromoController::class, 'edit'])->name('admin.promo.edit');
    Route::put('/admin/promo/{id}', [PromoController::class, 'update'])->name('admin.promo.update');
    

});
