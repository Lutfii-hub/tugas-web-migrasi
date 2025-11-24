<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KelasSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('kelas')->insert([
            ['nama_kelas' => 'X IPA 1', 'wali_kelas' => 'Budi Santoso'],
            ['nama_kelas' => 'X IPA 2', 'wali_kelas' => 'Dewi Lestari'],
            ['nama_kelas' => 'X IPS 1', 'wali_kelas' => null],
        ]);
    }
}
