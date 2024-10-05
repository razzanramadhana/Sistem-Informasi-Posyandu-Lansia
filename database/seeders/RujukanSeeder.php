<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RujukanSeeder extends Seeder
{
    public function run()
    {
        DB::table('Rujukan')->insert([
            [
                'id_rumah_sakit' => 1, // Sesuaikan dengan data id_rumah_sakit yang ada di tabel 'Rumah_Sakit'
                'id_kunjungan' => 1, // Sesuaikan dengan data id_kunjungan yang ada di tabel 'Kunjungan'
                'status_rujukan' => 'Ditindak Lanjut',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_rumah_sakit' => 2,
                'id_kunjungan' => 2,
                'status_rujukan' => 'Dirujuk untuk pemeriksaan lanjutan',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_rumah_sakit' => 3,
                'id_kunjungan' => 3,
                'status_rujukan' => 'Selesai',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
