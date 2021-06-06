<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\TheatresController;
use App\Http\Controllers\Backend\ScreensController;
use App\Http\Controllers\Backend\MoviesController;
use App\Http\Controllers\Backend\DashboardController;

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

// Route::get('/dashboard', function () {
//     return view('backend/movies/index');
// });


Route::get('/dashboard', [DashboardController::class, 'index']);

Route::resource('theatres', TheatresController::class);
Route::resource('screens', ScreensController::class);
Route::resource('movies', MoviesController::class);
