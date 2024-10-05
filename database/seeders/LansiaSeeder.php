<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class LansiaSeeder extends Seeder
{
    public function run()
    {
        DB::table('Lansia')->insert([
            [
                'nama' => 'Bambang Santoso',
                'tanggal_lahir' => '1950-08-15',
                'jenis_kelamin' => 'Laki-laki',
                'alamat' => 'Jl. Anggrek No. 22, Surabaya',
                'alergi_obat' => 'Penisilin',
                'riwayat_penyakit' => 'Diabetes, Hipertensi',
                'vaksin' => 'Covid-19, Influenza',
                'no_telpon' => '081234567890',
                'diagnosa' => 'Hipertensi kronis',
                'obat_yang_diberikan' => 'Captopril, Metformin',
                'id_user' => 1, // Sesuaikan dengan id_user di tabel 'user'
                'nik_lansia' => '3501234567890001',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Siti Nurjanah',
                'tanggal_lahir' => '1948-04-10',
                'jenis_kelamin' => 'Perempuan',
                'alamat' => 'Jl. Kenanga No. 10, Sidoarjo',
                'alergi_obat' => null,
                'riwayat_penyakit' => 'Hipertensi',
                'vaksin' => 'Covid-19',
                'no_telpon' => '081987654321',
                'diagnosa' => 'Hipertensi ringan',
                'obat_yang_diberikan' => 'Amlodipine',
                'id_user' => 2, // Sesuaikan dengan id_user di tabel 'user'
                'nik_lansia' => '3509876543210002',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Sugeng Purnomo',
                'tanggal_lahir' => '1955-06-22',
                'jenis_kelamin' => 'Laki-laki',
                'alamat' => 'Jl. Melati No. 18, Gresik',
                'alergi_obat' => 'Sulfa',
                'riwayat_penyakit' => 'Asma, Jantung',
                'vaksin' => 'Covid-19',
                'no_telpon' => '082123456789',
                'diagnosa' => 'Penyakit jantung',
                'obat_yang_diberikan' => 'Aspirin, Salbutamol',
                'id_user' => 3, // Sesuaikan dengan id_user di tabel 'user'
                'nik_lansia' => '3505678901230003',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
