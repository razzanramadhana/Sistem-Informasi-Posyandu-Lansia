<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Buat pengguna admin
        user::create([
            'nama' => 'Admin',
            'nama_akun' => 'Admin',
            'tanggal_lahir' => '2024-10-02',
            'jenis_kelamin' => 'L',
            'alamat' => 'asdasd',
            'email' => 'admin@admin.com',
            'password_akun' => Hash::make('abc12345'), // Hash password
            'role' => 'nakes', // Role sebagai admin
            'no_telpon' => '0987654'
        ]);
    }
}
