<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\GenreController;

// Test route
Route::get('/test', function () {
    return response()->json([
        'success' => true,
        'message' => 'API route works!'
    ]);
});

// Books API
Route::prefix('books')->group(function () {
    Route::get('/', [BookController::class, 'index']);
    Route::post('/', [BookController::class, 'store']);
    Route::get('/{id}', [BookController::class, 'show']);
});

// Authors API
Route::prefix('authors')->group(function () {
    Route::get('/', [AuthorController::class, 'index']);
});

// Genres API
Route::prefix('genres')->group(function () {
    Route::get('/', [GenreController::class, 'index']);
});