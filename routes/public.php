<?php

use App\Http\Controllers\PublicPagesController;
use Illuminate\Support\Facades\Route;

Route::name('public.')->group(function () {

    Route::controller(PublicPagesController::class)->group(function () {
        Route::get('home', 'home')->name('home');
    });
});