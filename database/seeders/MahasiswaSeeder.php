<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('mahasiwas')->insert([
            [
                'nama' => 'Rusydi Jabir Alawfa',
                'nim' => '362458302044',
                'jurusan' => 'Jurusan Bisnis dan informatika',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Bob Smith',
                'nim' => '2021002',
                'jurusan' => 'Sistem Informasi',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Charlie Brown',
                'nim' => '2021003',
                'jurusan' => 'Teknik Komputer',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
