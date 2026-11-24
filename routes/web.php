<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\HaloController;
use App\Http\Controllers\AboutController;

Route::get('/', [BerandaController::class, 'index']);
Route::get('/halo', [HaloController::class, 'index']);
Route::get('/about', [AboutController::class, 'index']);