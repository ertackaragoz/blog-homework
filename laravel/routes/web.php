<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::get('/', [BlogController::class, 'index'])->name('home');
Route::get('/makale/{id}', [BlogController::class, 'show'])->name('makale.detay');
