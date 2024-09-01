<?php

use Illuminate\Support\Facades\Route;

Route::redirect('/', 'home');

require __DIR__ . '/admin.php';
require __DIR__ . '/public.php';