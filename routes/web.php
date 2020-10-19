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

Route::get('/',  [App\Http\Controllers\MovieController::class, 'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::post('/genre', [App\Http\Controllers\GenreController::class, 'store'])->name('add.genre');
Route::post('/movie', [App\Http\Controllers\MovieController::class, 'store'])->name('add.movie');
Route::get('/movie/{movie}', [App\Http\Controllers\MovieController::class, 'edit'])->name('edit.movie');
Route::post('/movie/{movie}', [App\Http\Controllers\MovieController::class, 'update'])->name('update.movie');
Route::post('/movie/{movie}/destroy', [App\Http\Controllers\MovieController::class, 'destroy'])->name('delete.movie');
Route::get('/movie/{movie}/show', [App\Http\Controllers\MovieController::class, 'show'])->name('show.movie');
