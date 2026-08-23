<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/whoami', function () {
    return 'Jorence Karl Borja | 2023-70383 | Block 4C | ITRACKB4 Laravel 12';
});


Route::get('/books', [BookController::class, 'index']);