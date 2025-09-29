<?php

use Illuminate\Support\Facades\Route;
// use Illuminate\Support\Facades\DB;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// // Insert data mahasiswa
// Route::get('/insert', function () {
//     DB::table('mahasiwas')->insert([
//         'nama' => 'Marisa Humairoh',
//         'nim' => '11223344',
//         'jurusan' => 'Pertanian',
//         'created_at' => now(),
//         'updated_at' => now(),
//     ]);

//     return "Data berhasil ditambahkan!";
// });

// // Ambil semua data mahasiswa
// Route::get('/mahasiswa', function () {
//     $mahasiswa = DB::table('mahasiswas')->get();
//     return response()->json($mahasiswa);
// });

Route::get('/insert', [MahasiswaController::class, 'insertData']);
Route::get('/mahasiswa', [MahasiswaController::class, 'getData']);