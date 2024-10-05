<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileWaliController extends Controller
{
    // Metode untuk menampilkan profil wali
    public function show()
    {
        // Mendapatkan data wali yang sedang login
        $wali = Auth::user(); 
        
        // Mengirim data wali ke view
        return view('dashboard', compact('wali'));
    }
}
