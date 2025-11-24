<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MahasiswaSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('mahasiswa')->insert([
            [
                'nim' => '230001',
                'nama' => 'Andi Wijaya',
                'kelas_id' => 1,
                'alamat' => 'Jl. Merpati No. 10'
            ],
            [
                'nim' => '230002',
                'nama' => 'Siti Rahma',
                'kelas_id' => 2,
                'alamat' => 'Jl. Melati No. 7'
            ],
            [
                'nim' => '230003',
                'nama' => 'Rizky Dwipa',
                'kelas_id' => 3,
                'alamat' => null
            ],
        ]);
    }
}

