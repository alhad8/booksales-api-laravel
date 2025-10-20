<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\GenreController;

// API Resource Routes untuk Books
Route::apiResource('books', BookController::class);

// API Resource Routes untuk Authors
Route::apiResource('authors', AuthorController::class);

// API Resource Routes untuk Genres
Route::apiResource('genres', GenreController::class);