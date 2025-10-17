<?php

use Illuminate\Support\Facades\Route;

Route::get('/testapi', function () {
    return response()->json(['message' => 'API route works!']);
});
