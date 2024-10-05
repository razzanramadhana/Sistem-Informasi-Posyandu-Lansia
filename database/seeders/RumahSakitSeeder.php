<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class RumahSakitSeeder extends Seeder
{
    public function run()
    {
        DB::table('Rumah_Sakit')->insert([
            [
                'nama_rumah_sakit' => 'Rumah Sakit Umum Daerah Surabaya',
                'alamat_rumah_sakit' => 'Jl. Ahmad Yani No.123, Surabaya',
                'no_telpon' => '031-1234567',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_rumah_sakit' => 'Rumah Sakit Siloam',
                'alamat_rumah_sakit' => 'Jl. Gubeng No.45, Surabaya',
                'no_telpon' => '031-7654321',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_rumah_sakit' => 'Rumah Sakit Graha Amerta',
                'alamat_rumah_sakit' => 'Jl. Manyar Kertoarjo No.67, Surabaya',
                'no_telpon' => '031-8765432',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
