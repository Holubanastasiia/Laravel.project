<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return view('hello');
});

Route::get('/about', AboutController::class);

//Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
//Route::get('/categories/create', [CategoryController::class, 'create'])->name('categories.create');
//Route::post('/categories', [CategoryController::class, 'store'])->name('categories.store');
//Route::get('/categories/{id}', [CategoryController::class, 'show'])->name('categories.show');
//Route::get('/categories/{id}/edit', [CategoryController::class, 'edit'])->name('categories.edit');

Route::prefix('admin')->name('admin.')->group(function () {

    Route::resource('categories', CategoryController::class);

    Route::resource('tags', TagController::class);

    Route::resource('users', UserController::class);

    Route::resource('brands', BrandController::class);

});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
