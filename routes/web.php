<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\MainController;
use Illuminate\Container\Attributes\Auth;
use Illuminate\Support\Facades\Route;

Route::post('/loginSubmit', [AuthController::class, 'loginSubmit']);
Route::get('/login', [AuthController::class, 'login']);
Route::get('/logout', [AuthController::class, 'logout']);