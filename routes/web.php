<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PendidikanController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

// Rute untuk halaman utama
Route::get('/', [PageController::class, 'index'])->name('index');

// Rute untuk login
Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('login', [AuthController::class, 'login']);
Route::post('logout', [AuthController::class, 'logout'])->name('logout');

Route::resource('admin', AdminController::class);


// Rute resource untuk pendidikan dan portfolio
Route::resource('pendidikan', PendidikanController::class);
Route::resource('portfolio', PortfolioController::class);


Route::get('/admin', [AdminController::class, 'index'])->name('admin');
