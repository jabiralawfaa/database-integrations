<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function insertData(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'required|email',
            'nim' => 'required|unique:mahasiswas',
            'jurusan' => 'required',
        ]);

        Mahasiswa::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'nim' => $request->nim,
            'jurusan' => $request->jurusan,
        ]);

        return "Data berhasil ditambahkan!";
    }

    public function getData()
    {
        $mahasiswas = Mahasiswa::all();
        return view('mahasiswa.index', ['mahasiswas' => $mahasiswas]);
    }
}