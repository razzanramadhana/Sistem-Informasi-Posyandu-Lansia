<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class UserSeeder extends Seeder
{
    public function run()
    {
        DB::table('user')->insert([
            [
                'email' => 'wali1@example.com',
                'password' => Hash::make('password123'),
                'nama_lengkap' => 'Ahmad Surya',
                'no_telpon' => '081234567890',
                'alamat' => 'Jl. Mawar No. 12, Surabaya',
                'jenis_kelamin' => 'Laki-laki',
                'role' => 'wali',
                'id_jadwal' => null,
                'nik' => '3501234567890001',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'email' => 'nakes1@example.com',
                'password' => Hash::make('password123'),
                'nama_lengkap' => 'Siti Rahma',
                'no_telpon' => '081987654321',
                'alamat' => 'Jl. Melati No. 34, Sidoarjo',
                'jenis_kelamin' => 'Perempuan',
                'role' => 'nakes',
                'id_jadwal' => 1, // Sesuaikan dengan id_jadwal yang ada di tabel Jadwal_Posyandu
                'nik' => '3509876543210002',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'email' => 'wali2@example.com',
                'password' => Hash::make('password123'),
                'nama_lengkap' => 'Budi Hartono',
                'no_telpon' => '082123456789',
                'alamat' => 'Jl. Kenanga No. 5, Gresik',
                'jenis_kelamin' => 'Laki-laki',
                'role' => 'wali',
                'id_jadwal' => null,
                'nik' => '3505678901230003',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
