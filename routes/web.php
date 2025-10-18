<?php

use Illuminate\Support\Facades\Route;

// Welcome page only
Route::get('/', function () {
    return view('welcome');
});