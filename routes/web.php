<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ComicController;

// Route :: resource('comics', ComicController :: Class);

Route::get('/', [ComicController ::class, 'index'])
    ->name('comic.index');

Route::get('/comics/create', [ComicController::class, 'create'])
    ->name('comic.create');

Route::post('/comics', [ComicController::class, 'store'])
    ->name('comic.store');

Route::get('/comics/{id}', [ComicController ::class, 'show'])
    ->name('comic.show');