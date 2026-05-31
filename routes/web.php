<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\ReviewController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('books', BookController::class);

Route::resource('books.reviews', ReviewController::class)
    ->scoped(['review' => 'book'])
    ->only('create', 'store');