<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TagsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/admin', function () {
//     return view('admin.index');
// });

Route::group([
    'prefix' => 'admin'
], function () {

    Route::get('/', DashboardController::class);

    Route::controller(TagsController::class)->prefix('tags')->as('tags.')->group(function () {
        Route::get('/', 'index')->name('index');

        Route::get('/create', 'create')->name('create');

        Route::post('/', 'store')->name('store');

        Route::get('/{id}', 'show')->where('id', '[0-9]+')->name('show');

        Route::get('/{id}/edit', 'edit')->name('edit');

        Route::put('/{id}', 'update')->where('id', '[0-9]+')->name('update');

        Route::delete('/{id}', 'destroy')->where('id', '[0-9]+')->name('destroy');
    });
});

// GET
// POST
// PUT || PATCH
// DELETE

// CRUD
