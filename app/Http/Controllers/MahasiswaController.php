<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MahasiswaController extends Controller
{
    public function insertData()
    {
        DB::table('mahasiwas')->insert([
            'nama' => 'Marisa Humairoh',
            'nim' => '11223344',
            'jurusan' => 'Pertanian',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return "Data berhasil ditambahkan!";
    }

    public function getData()
    {
        $mahasiswa = DB::table('mahasiwas')->get();
        return response()->json($mahasiswa);
    }
}