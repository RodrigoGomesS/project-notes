<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\MainController;
use App\Http\Middleware\CheckIsLogged;
use App\Http\Middleware\CheckIsNotLogged;
use Illuminate\Support\Facades\Route;

Route::middleware([CheckIsNotLogged::class])->group(function () {
    Route::post('/loginSubmit', [AuthController::class, 'loginSubmit']);
    Route::get('/login', [AuthController::class, 'login']);
});

Route::middleware([CheckIsLogged::class])->group(function () {
    Route::post('/newNoteSubmit', [MainController::class, 'createSubmit'])->name('createSubmit');
    Route::post('/editNoteSubmit', [MainController::class, 'editSubmit'])->name('editSubmit');
    Route::get('/', [MainController::class, 'index'])->name('home');
    Route::get('/newNote', [MainController::class, 'create'])->name('create');
    Route::get('/editNote/{id}', [MainController::class, 'edit'])->name('edit');
    Route::get('/deleteNote/{id}', [MainController::class, 'delete'])->name('delete');
    Route::get('/deleteNoteConfirm/{id}', [MainController::class, 'deleteConfirm'])->name('deleteConfirm');
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
});
