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
Route::get('/admin', DashboardController::class);

Route::get('/admin/tags', [TagsController::class, 'index']);

Route::get('/admin/tags/create', [TagsController::class, 'create']);

Route::post('/admin/tags/store', [TagsController::class, 'store']);

Route::get('/admin/tags/{id}/show', [TagsController::class, 'show']);

Route::get('/admin/tags/{id}/edit', [TagsController::class, 'edit']);

Route::put('/admin/tags/{id}', [TagsController::class, 'update']);

Route::delete('/admin/tags/{id}', [TagsController::class, 'delete']);

// GET
// POST
// PUT || PATCH
// DELETE
