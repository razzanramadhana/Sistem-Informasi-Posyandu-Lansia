<?php

namespace App\Http\Controllers;

use App\Models\Lansia; // Pastikan untuk mengimpor model Lansia
use Illuminate\Support\Facades\Auth;

class TampilLansia extends Controller
{
    public function index()
    {
        // Ambil ID pengguna yang sedang login
        $my_id = Auth::id(); // Dapatkan ID pengguna yang sedang login

        // Ambil data lansia berdasarkan id_user
        $data_lansia = Lansia::where('id_user', $my_id)->get(); // Pastikan 'id_user' sesuai dengan nama kolom di database Anda

        // Simpan data lansia dalam array untuk dikirim ke view
        $data_return['lansias'] = $data_lansia; // Kirim data lansia ke view

        // Kembalikan view dengan data lansia
        return view('profil lansia', $data_return);  // Pastikan nama view sesuai
    }
}