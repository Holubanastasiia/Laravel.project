<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TagController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return view('hello');
});

Route::get('/about', AboutController::class);

Route::get('/categories', CategoryController::class);
Route::get('/tags', \App\Http\Controllers\TagsController::class);
