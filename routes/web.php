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
    
Route::get('/comics/{id}/edit', [ComicController::class, 'edit'])
    ->name('comic.edit');

Route::put('/comics/{id}/edit', [ComicController::class, 'update'])
    ->name('comic.update');

Route::delete('/comics/{id}', [ComicController::class, 'destroy'])
    ->name('comic.destroy');
