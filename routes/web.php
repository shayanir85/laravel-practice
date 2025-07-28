<?php

use App\Http\Controllers\GenreController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class,'home']);
Route::get('/admin',function(){
    return view('admin.admin');
});
Route::get('/explore',function(){
    return view('explore.explore');
});

Route::resource('/Book', BookController::class);
Route::resource('/genre', GenreController::class);