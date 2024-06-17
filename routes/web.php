<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    Auth\LoginController,
    Dashboard\HomeController,
};

Route::get('/', [LoginController::class, 'index'])->name('login.get');
Route::post('/login-post', [LoginController::class, 'login'])->name('login.post');

Route::middleware(['web'])->group(function () {
    Route::get('/dashboard', [HomeController::class,  'index'])->name('dashboard.get');
});
