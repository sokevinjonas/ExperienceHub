<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicPagesController;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\PublicAuthenticatedSessionController;

Route::name('public.')->group(function () {

    Route::controller(PublicPagesController::class)->name('pages.')->group(function () {
        Route::get('home', 'home')->name('home');
    });

    Route::get('testimonials', function () {
        return view('public.testimonials.index');
    });

    Route::middleware('guest')->group(function () {
        Route::get('login', [PublicAuthenticatedSessionController::class, 'create'])->name('login');
        Route::post('login', [PublicAuthenticatedSessionController::class, 'store']);
        Route::get('register', [RegisteredUserController::class, 'create'])->name('register');
        Route::post('register', [RegisteredUserController::class, 'store']);
    });

    Route::middleware('auth')->group(function () {
        Route::post('logout', [PublicAuthenticatedSessionController::class, 'destroy'])->name('logout');
    });
});