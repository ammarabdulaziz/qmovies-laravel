<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\TheatresController;
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

Route::get('/theatres', [TheatresController::class, 'index']);
Route::get('/theatres/add', [TheatresController::class, 'create']);
Route::post('/theatres/add', [TheatresController::class, 'store']);
Route::get('/theatres/edit/{id}', [TheatresController::class, 'edit']);
Route::post('/theatres/update/{id}', [TheatresController::class, 'update']);
Route::get('/theatres/delete/{id}', [TheatresController::class, 'destroy']);

Route::get('/movies', [MoviesController::class, 'index']);
Route::get('/movies/add', [MoviesController::class, 'create']);
Route::post('/movies/add', [MoviesController::class, 'store']);
Route::get('/movies/edit/{id}', [MoviesController::class, 'edit']);
Route::post('/movies/update/{id}', [MoviesController::class, 'update']);
Route::get('/movies/delete/{id}', [MoviesController::class, 'destroy']);
