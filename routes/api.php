<?php

use App\Http\Controllers\AppController;
use Illuminate\Support\Facades\Route;

Route::get('/app/getClients', [AppController::class, 'getClients']);
