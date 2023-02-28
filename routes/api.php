<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;


Route::prefix('/v1')->group(function () {
    Route::get('products/list', [ProductController::class,'getDataTableList'])->name('products.list');
    Route::resource('products', ProductController::class);
});


