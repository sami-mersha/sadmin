<?php

use App\Http\Controllers\Admin\PromoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\KonserController;
use App\Http\Controllers\Admin\TiketController;

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
    Route::resource('konsers', KonserController::class);
    // Route::get('/konser', [KonserController::class, 'index'])->name('konser.index');
    Route::get('konsers/create', [KonserController::class, 'create'])->name('admin.konsers.create');
    Route::post('admin/konser/store', [KonserController::class, 'store'])->name('admin.konser.store');
    Route::put('/admin/konser/{id}', [KonserController::class, 'update'])->name('admin.konser.update');
    Route::delete('/admin/konser/{id}', [KonserController::class, 'destroy'])->name('admin.konser.destroy');
    Route::resource('konser', KonserController::class)->except(['show']);


    // Route::resource('admin/konser', KonserController::class);
    Route::resource('tiket', TiketController::class)->except(['show']);
    Route::get('/tiket', [TiketController::class, 'index'])->name('tiket.index');
    Route::get('admin/tiket/create', [TiketController::class, 'create'])->name('admin.tiket.create');
    Route::post('admin/tiket/store', [TiketController::class, 'store'])->name('admin.tiket.store');
    Route::get('/admin/tiket/{id}/edit', [TiketController::class, 'edit'])->name('admin.tiket.edit');
    Route::put('/admin/tiket/{id}', [TiketController::class, 'update'])->name('admin.tiket.update');
    //punyae promo
    Route::resource('promo', PromoController::class);
    Route::get('admin/promo/create', [PromoController::class, 'create'])->name('admin.promo.create');
    Route::post('admin/promo/store', [PromoController::class, 'store'])->name('admin.promo.store');
    Route::get('/admin/promo/{id}/edit', [PromoController::class, 'edit'])->name('admin.promo.edit');
    Route::put('/admin/promo/{id}', [PromoController::class, 'update'])->name('admin.promo.update');
    

});
