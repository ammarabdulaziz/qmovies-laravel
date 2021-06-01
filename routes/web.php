<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\TheatreController;

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

Route::get('/', [TheatreController::class, 'index']);
Route::get('/add', [TheatreController::class, 'create']);
Route::post('/add', [TheatreController::class, 'store']);
Route::get('/edit/{id}', [TheatreController::class, 'edit']);
Route::post('/update/{id}', [TheatreController::class, 'update']);
Route::get('/delete/{id}', [TheatreController::class, 'destroy']);
