<?php

use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;

Route::get('/{any}', [PagesController::class, 'app'])->where('any', '.*');
