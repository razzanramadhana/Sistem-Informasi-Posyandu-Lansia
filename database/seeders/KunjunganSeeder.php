<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class KunjunganSeeder extends Seeder
{
    public function run()
    {
        DB::table('Kunjungan')->insert([
            [
                'id_jadwal' => 1, // Sesuaikan dengan data id_jadwal dari tabel 'Jadwal_Posyandu'
                'id_lansia' => 1, // Sesuaikan dengan data id_lansia dari tabel 'Lansia'
                'tanggal_kunjungan' => '2024-10-01',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_jadwal' => 2,
                'id_lansia' => 2,
                'tanggal_kunjungan' => '2024-10-03',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_jadwal' => 3,
                'id_lansia' => 3,
                'tanggal_kunjungan' => '2024-10-05',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
