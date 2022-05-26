<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [App\Http\Controllers\CrudController::class, 'index'])->name('user.index');
Route::post('addUser', [App\Http\Controllers\CrudController::class, 'addUser'])->name('user.add.user');
Route::post('deleteUser', [App\Http\Controllers\CrudController::class, 'deleteUser'])->name('user.delete.user');
Route::post('viewEdit', [App\Http\Controllers\CrudController::class, 'viewEdit'])->name('user.view.user');


