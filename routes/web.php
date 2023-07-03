<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\front\FrontController;
use App\Http\Controllers\HomeController;



Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');

Route::resource('post', AdminController::class);

Route::get('/category/{id}', [FrontController::class, 'category'])->name('category');
Route::get('/details/{id}', [FrontController::class, 'details'])->name('details');

Route::get('/', [FrontController::class, 'index'])->name('index');
