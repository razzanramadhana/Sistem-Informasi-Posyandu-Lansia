<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HasilKesehatan;
use App\Models\Lansia;
use App\Models\Kunjungan;

class InputHasilKesehatanController extends Controller
{
    public function index() {
        // Retrieve data from the database
        $lansias = Lansia::all();  // Get all 'Lansia' records
        $kunjungans = Kunjungan::all();  // Get all 'Kunjungan' records
    
        // Pass the data to the view
        return view('input hasil kesehatan', compact('lansias', 'kunjungans'));
    }
    
    public function create()
    {
        // Mengambil data lansia dan kunjungan untuk dropdown
        $lansias = Lansia::all(); 
        $kunjungans = Kunjungan::all(); 
    
        return view('input hasil kesehatan', compact('lansias', 'kunjungans')); // Konsisten dengan nama variabel di view
    }
    

    public function store(Request $request)
    {
        // Validasi data
        $request->validate([
            'id_lansia' => 'required|exists:lansia,id_lansia',
            'id_kunjungan' => 'required|exists:kunjungan,id_kunjungan',
            'berat_badan' => 'required|numeric',
            'tinggi_badan' => 'required|numeric',
            'tekanan_darah' => 'required|numeric',
            'gula_darah' => 'required|numeric',
            'kolesterol' => 'required|numeric',
        ]);

        
        // Menyimpan data ke dalam tabel Hasil_Kesehatan
        HasilKesehatan::create([
            'id_lansia' => $request->id_lansia,
            'id_kunjungan' => $request->id_kunjungan,
            'berat_badan' => $request->berat_badan,
            'tinggi_badan' => $request->tinggi_badan,
            'tekanan_darah' => $request->tekanan_darah,
            'gula_darah' => $request->gula_darah,
            'kolesterol' => $request->kolesterol,
        ]);

        // Menyimpan data ke dalam tabel Hasil_Kesehatan
        HasilKesehatan::create($request->all());

        return redirect()->route('input hasil kesehatan')->with('success', 'Data berhasil ditambahkan.'); // Sesuaikan nama route
    }
}