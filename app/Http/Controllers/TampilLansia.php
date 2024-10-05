<?php

namespace App\Http\Controllers;

use App\Models\Lansia;
use Illuminate\Http\Request;

class TampilLansia extends Controller
{
    public function index()
    {
        // Get all Lansia data, excluding id_lansia and id_user
        $lansias = Lansia::all(['nama', 'tanggal_lahir', 'jenis_kelamin', 'alamat', 'alergi_obat', 'riwayat_penyakit', 'vaksin', 'no_telpon', 'diagnosa', 'obat_yang_diberikan', 'nik_lansia']);

        // Return the view with the Lansia data
        return view('profil lansia', compact('lansias'));
    }
}
