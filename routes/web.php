<?php

use App\Http\Controllers\GenreController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

// Main routes
Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/admin', function () {
    return view('admin.admin');
})->name('admin');
Route::get('/explore', function () {
    return view('explore.explore');
})->name('explore');

// Resource routes with proper naming convention
Route::get('/Books', [BookController::class , 'index'])->name('Books.index') ;
Route::get('/Books/create', [BookController::class , 'create'])->name('Books.create');
Route::post('/Books/store', [BookController::class , 'store'])->name('Books.store');

Route::get('/genres' , [GenreController::class , 'index'])->name('genres.index');
Route::get('/genres/create' , [GenreController::class , 'create'])->name('genres.create');
Route::post('/genres/store' , [GenreController::class , 'store'])->name('genres.store');