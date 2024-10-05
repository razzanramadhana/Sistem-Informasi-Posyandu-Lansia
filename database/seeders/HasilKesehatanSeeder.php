<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HasilKesehatanSeeder extends Seeder
{
    public function run()
    {
        // Seeding some sample data into the 'Hasil_Kesehatan' table
        DB::table('Hasil_Kesehatan')->insert([
            [
                'id_kunjungan' => 1, // Assuming there's a related record in the 'Kunjungan' table
                'id_lansia' => 1, // Assuming there's a related record in the 'Lansia' table
                'berat_badan' => 65.5,
                'tinggi_badan' => 170.2,
                'tekanan_darah' => '120/80',
                'gula_darah' => '90 mg/dL',
                'kolesterol' => '190 mg/dL',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_kunjungan' => 2,
                'id_lansia' => 2,
                'berat_badan' => 72.3,
                'tinggi_badan' => 165.7,
                'tekanan_darah' => '130/85',
                'gula_darah' => '110 mg/dL',
                'kolesterol' => '200 mg/dL',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_kunjungan' => 3,
                'id_lansia' => 3,
                'berat_badan' => 58.2,
                'tinggi_badan' => 160.5,
                'tekanan_darah' => '118/75',
                'gula_darah' => '95 mg/dL',
                'kolesterol' => '180 mg/dL',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}

