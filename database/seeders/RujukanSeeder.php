<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RujukanSeeder extends Seeder
{
    public function run()
    {
        // Example data to insert into the Rujukan table
        $data = [
            [
                'id_rumah_sakit' => 1, // Ensure this ID exists in the Rumah_Sakit table
                'id_lansia' => 1, // Ensure this ID exists in the Lansia table
                'status_rujukan' => 'Diterima',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_rumah_sakit' => 2,
                'id_lansia' => 2,
                'status_rujukan' => 'Pending',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_rumah_sakit' => 3,
                'id_lansia' => 3,
                'status_rujukan' => 'Ditolak',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        // Insert data into the Rujukan table
        DB::table('Rujukan')->insert($data);
    }
}
