<?php

namespace App\Http\Controllers;

use App\Models\HasilKesehatan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HasilKesehatanController extends Controller
{
    public function index()
    {
        // Get the authenticated user's ID
        $userId = Auth::id();
        
        // Fetch the health results associated with the elderly that belong to this user
        // Assuming there is a relationship between User and Lansia (not shown in your provided code)
        $hasilKesehatan = HasilKesehatan::whereHas('lansia', function($query) use ($userId) {
            $query->where('id_user', $userId); // Replace 'id_user' with the actual column name in your Lansia table
        })->with('kunjungan') // Eager load the kunjungan relationship
          ->get();

        // Return the view with the health results
        return view('hasil kesehatan', compact('hasilKesehatan'));
    }
}
