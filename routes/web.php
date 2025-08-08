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
Route::resource('books', BookController::class)->parameters([
    'books' => 'book'  
]);

Route::resource('genres', GenreController::class);