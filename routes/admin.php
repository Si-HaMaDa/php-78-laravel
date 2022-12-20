<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TagsController;
use Illuminate\Support\Facades\Route;


Route::get('/', DashboardController::class)->name('dashboard'); // admin.dashboard

Route::controller(TagsController::class)->prefix('tags')->as('tags.')->group(function () {
    Route::get('/', 'index')->name('index'); // admin.tags.index

    Route::get('/create', 'create')->name('create');

    Route::post('/', 'store')->name('store');

    Route::get('/{id}', 'show')->where('id', '[0-9]+')->name('show');

    Route::get('/{id}/edit', 'edit')->name('edit');

    Route::put('/{id}', 'update')->where('id', '[0-9]+')->name('update');

    Route::delete('/{id}', 'destroy')->where('id', '[0-9]+')->name('destroy');
});


// Route::resource('categories', CategoryController::class);

Route::resources([
    'categories' => CategoryController::class,
    'posts' => PostController::class
]);
