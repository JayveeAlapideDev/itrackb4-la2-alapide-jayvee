<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductControllerController;

Route::get('/whoami', function () {
    return 'Jayvee Espanola Alapide | 2023-71200 | Block 4c | ITRACKB4 Laravel 12';
});

Route::get('/products', [ProductController::class, 'index']);
