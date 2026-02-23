<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SalesController;

// Home
Route::get('/', [HomeController::class, 'index']);

// Products
Route::get('/products', [ProductController::class, 'index']);
Route::prefix('category')->group(function () {
    Route::get('/{name}', [ProductController::class, 'category']);
});

// User
Route::get('/user/{id}/name/{name}', [UserController::class, 'profile']);

// Penjualan
Route::get('/sales', [SalesController::class, 'index']);