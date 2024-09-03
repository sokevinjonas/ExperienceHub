<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserRoleController;
use App\Http\Controllers\UserPermissionController;
use App\Http\Controllers\PublicAuthenticatedSessionController;

Route::middleware('guest')->group(function () {
});

Route::name('admin.')->group(function () {
    Route::get('login-deco', [PublicAuthenticatedSessionController::class, 'create'])->name('login');
    Route::middleware('auth')->group(function () {
        Route::get('/admin-welcome', [UserRoleController::class, 'index'])->name('admin');
        Route::get('/add-moderateur', [UserPermissionController::class, 'listModerateur'])->name('moderateur');
        Route::post('/store-moderateur', [UserPermissionController::class, 'storeModerateur'])->name('store.moderateur');
        Route::put('/admin/moderators/{id}/update', [UserPermissionController::class, 'updateModerateur'])->name('moderators.update');
        Route::delete('/admin/moderators/{id}/destroy', [UserPermissionController::class, 'destroy'])->name('moderators.destroy');

    });
});
