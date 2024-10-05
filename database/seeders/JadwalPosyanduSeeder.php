<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JadwalPosyanduSeeder extends Seeder
{
    public function run()
    {
        DB::table('Jadwal_Posyandu')->insert([
            [
                'tanggal_jadwal' => '2024-10-10',
                'jam_jadwal' => '07:00:00',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'tanggal_jadwal' => '2024-10-10', 
                'jam_jadwal' => '09:00:00',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'tanggal_jadwal' => '2024-10-10',
                'jam_jadwal' => '13:00:00', 
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
