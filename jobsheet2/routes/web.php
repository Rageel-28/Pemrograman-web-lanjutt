<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
// Import ketiga controller baru
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PhotoController;

// Rute WelcomeController yang sebelumnya
Route::get('/hello', [WelcomeController::class,'hello']);

// --- Rute Single Action Controller ---
// Perhatikan: Tidak perlu lagi menggunakan array [...]
Route::get('/', HomeController::class);
Route::get('/about', AboutController::class);
Route::get('/articles/{id}', ArticleController::class);

Route::resource('photos', PhotoController::class)->only([
    'index', 'show'
]);

Route::resource('photos', PhotoController::class)->except([
    'create', 'store', 'update', 'destroy'
]);
