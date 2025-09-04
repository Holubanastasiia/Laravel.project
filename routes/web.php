<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Admin\UserController;
use App\Livewire\Admin\Posts\CreatePost;
use App\Livewire\Admin\Posts\PostTable;
use App\Livewire\Admin\Products\CreateProduct;
use App\Livewire\Admin\Products\ProductTable;
use App\Livewire\Admin\Products\UpdateProduct;
use App\Livewire\Admin\Users\UserList;
use App\Livewire\Admin\Users;
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

//Route::prefix('admin')->name('admin.')->group(function () {
//
//    Route::resource('categories', CategoryController::class);
//
//    Route::resource('tags', TagController::class);
//
//    Route::resource('users', UserController::class);
//
//    Route::resource('brands', BrandController::class);
//
//});

Route::controller(CategoryController::class)->group(function () {
    Route::get('admin/categories/trashed', 'trashed')->name('admin.categories.trashed');
    Route::post('admin/categories/restore/{id}', 'restore')->name('admin.categories.restore');
    Route::delete('admin/categories/force/{id}', 'force')->name('admin.categories.force');
});

Route::get('/mailable', function () {
    return new \App\Mail\OrderShipped();
});

Route::get('users', UserList::class);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::prefix('admin')->name('admin.')->group(function () {

        Route::resource('categories', CategoryController::class);

        Route::resource('tags', TagController::class);

        Route::resource('users', UserController::class);

        Route::resource('brands', BrandController::class);

    });
});

Route::get('admin/posts', PostTable::class)->name('admin.products');
Route::get('admin/posts/create', CreatePost::class)->name('admin.products.create');
Route::get('admin/posts/{post}/edit', \App\Livewire\Admin\Posts\UpdatePost::class)
    ->name('admin.posts.edit');

Route::get('admin/products', ProductTable::class)->name('admin.products');
Route::get('admin/products/create', CreateProduct::class)->name('admin.products.create');
Route::get('admin/products/{product}/update', UpdateProduct::class)->name('admin.products.update');
