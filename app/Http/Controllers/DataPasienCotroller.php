<?php

namespace App\Http\Controllers;

use App\Models\Lansia;
use Illuminate\Http\Request;

class DataPasienController extends Controller
{
    // Menampilkan data lansia
    public function index()
    {
        $dataLansia = Lansia::all(); // Mengambil semua data lansia dari database
        return view('data pasien'); // Mengirim data ke view 'data-pasien'
    }

    // Menampilkan detail pasien
    public function show($id)
    {
        $lansia = Lansia::find($id); // Mencari lansia berdasarkan id
        if (!$lansia) {
            return redirect()->route('data pasien')->with('error', 'Data tidak ditemukan');
        }
        return view('detail pasien', compact('lansia')); // Mengirim data lansia ke view 'detail-pasien'
    }
}