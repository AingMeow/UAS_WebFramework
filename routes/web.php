<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookkeepingController;
use App\Http\Controllers\AuthController;

// Homepage route
Route::get('/', [BookkeepingController::class, 'index'])->name('home');

// Auth routes
Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('login', [AuthController::class, 'login']);
Route::post('logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/records', [BookkeepingController::class, 'index'])->name('records.index');

// Protect CRUD routes with middleware
Route::middleware('auth')->group(function () {
    Route::resource('records', BookkeepingController::class);
});