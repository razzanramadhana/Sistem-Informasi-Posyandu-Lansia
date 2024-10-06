<?php

namespace App\Http\Controllers;

use App\Models\Lansia;
use Illuminate\Http\Request;
use Carbon\Carbon;


class DataLansiaController extends Controller
{
    // Menampilkan semua data lansia
    public function index()
    {
        $dataLansia = Lansia::all(); // Mengambil semua data lansia dari database
        return view('data pasien', compact('dataLansia')); // Mengirim data ke view 'data-pasien'
    }

    // Menampilkan detail lansia berdasarkan ID
    public function show($id)
    {
        $lansia = Lansia::with('user')->findOrFail($id);

        $tanggalLahir = $lansia->tanggal_lahir;
        $umur = Carbon::parse($tanggalLahir)->age;
        
        if (!$lansia) {
            return redirect()->route('data pasien')->with('error', 'Data tidak ditemukan');
        }
        return view('detail pasien', compact('lansia','umur')); // Mengirim data lansia ke view 'detail-pasien'
    }

    public function showdarirujukan($id)
    {
        $lansia = Lansia::findOrFail($id);
        return view('lansia.show', compact('lansia'));
    }
}
