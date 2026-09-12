<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/whoami', function () {
    return 'Jorence Karl Borja | 2023-70383 | Block 4C | ITRACKB4 Laravel 12';
});

Route::get('/books/featured', [BookController::class, 'featured'])
    ->name('books.featured');

Route::get('/books/filter/{genre?}', [BookController::class, 'filter'])
    ->name('books.filter');

Route::resource('books', BookController::class)
    ->only(['index', 'show']);