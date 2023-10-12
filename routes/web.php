<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CastController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'utama']);

Route::get('/register', [AuthController::class, 'register']);

Route::post('/welcome', [AuthController::class, 'welcome']);

Route::get('/table', function() {
    return view('table');
});

Route::get('/data-table', function() {
    return view('data-table');
});

//CRUD Cast

//Create
//Form Tambah Cast
Route::get('/cast/create', [CastController::class, 'create']);
//Untuk kirim data ke database atau tambah data ke database
Route::post('/cast', [CastController::class, 'store']);

//Read
//Tampil semua data
Route::get('/cast', [CastController::class, 'index']);
//Detail Cast berdasarkan id
Route::get('/cast/{cast_id}', [CastController::class, 'show']);

//Update
//Form update cast
Route::get('/cast/{cast_id}/edit', [CastController::class, 'edit']);
//Update data ke database berdasarkan id
Route::put('/cast/{cast_id}', [CastController::class, 'update']);

//Delete
//Delete berdasarkan id
Route::delete('/cast/{cast_id}', [CastController::class, 'destroy']);
