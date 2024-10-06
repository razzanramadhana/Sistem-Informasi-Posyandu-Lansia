<?php

namespace App\Http\Controllers;

use App\Models\Lansia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; // Import the Auth facade

class TambahkanLansiaController extends Controller
{
    public function create()
    {
        return view('tambahkan lansia'); // Return the view for adding Lansia
    }

    public function store(Request $request)
    {
        // Validate the incoming request
        $validatedData = $request->validate([
            'nama' => 'required|string|max:255',
            'tanggal_lahir' => 'required|date',
            'jenis_kelamin' => 'required|string',
            'alamat' => 'required|string|max:255',
            'alergi_obat' => 'nullable|string|max:255',
            'no_telpon' => 'required|string|max:15',
            'nik_lansia' => 'required|string|max:16',
            'riwayat_penyakit' => 'required|string|max:255'
        ]);

        // Create a new Lansia record with the current user's ID
        Lansia::create(array_merge($validatedData, ['id_user' => Auth::id()]));

        return redirect()->route('profil-lansia')->with('success', 'Lansia berhasil ditambahkan.');
    }
}