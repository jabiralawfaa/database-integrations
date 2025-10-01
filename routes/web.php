<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;

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

Route::get('/mahasiswa/create', function () {
    return view('mahasiswa.create');
});

Route::post('/mahasiswa', [MahasiswaController::class, 'insertData']);
Route::get('/mahasiswa', [MahasiswaController::class, 'getData']);