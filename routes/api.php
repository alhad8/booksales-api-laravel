<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\GenreController;

Route::prefix('books')->group(function () {
    Route::get('/', [BookController::class, 'index']);
    Route::post('/', [BookController::class, 'store']);
    Route::get('/{id}', [BookController::class, 'show']);
});

Route::prefix('authors')->group(function () {
    Route::get('/', [AuthorController::class, 'index']);        
    Route::post('/', [AuthorController::class, 'store']);       
});

Route::prefix('genres')->group(function () {
    Route::get('/', [GenreController::class, 'index']);         
    Route::post('/', [GenreController::class, 'store']);        
});