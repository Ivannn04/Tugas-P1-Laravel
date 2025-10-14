<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\GenreController;
use App\Http\Controllers\AuthorController;

Route::get('/', [GenreController::class, 'index']);
Route::get('/genre', [GenreController::class, 'index']);
Route::get('/author', [AuthorController::class, 'index']);
