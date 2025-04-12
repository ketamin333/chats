<?php

use App\Http\Controllers\PageController;
use App\Http\Middleware\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/login', [PageController::class, 'guest'])->name('/');

Route::get('/{any}', [PageController::class, 'app'])
    ->where('any', '.*');
//    ->middleware(Auth::class);
