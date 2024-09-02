<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PasswordController;

Route::redirect('/', 'home');
Route::put('password', [PasswordController::class, 'update'])->name('password.update')->middleware('auth');


require __DIR__ . '/admin.php';
require __DIR__ . '/public.php';
