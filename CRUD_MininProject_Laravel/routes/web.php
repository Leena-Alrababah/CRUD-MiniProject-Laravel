<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/Products.index', [ProductController::class, 'index'])->name('Products.index');

Route::get('/Products.show', [ProductController::class, 'show'])->name('Products.show');

//DELETE
Route::delete('/Products/{id}', [ProductController::class, 'destroy'])->name('Products.destroy');

