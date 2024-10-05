<?php

namespace App\Http\Controllers;

use App\Models\HasilKesehatan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ShowHasilKesehatanController extends Controller
{
    public function index()
    {
        // Get the currently authenticated user
        $user = Auth::user();

        // Check if the user has the 'wali' role
        if ($user && $user->role === 'wali') {
            // Fetch health results for the elderly associated with the guardian (wali)
            $hasilKesehatan = HasilKesehatan::whereHas('lansia', function ($query) use ($user) {
                $query->where('id_user', $user->id); // 'id_user' represents the authenticated wali
            })->with('kunjungan')->get();

            // Return view with the fetched data
            return view('hasil kesehatan', compact('hasilKesehatan')); // Pastikan nama view sesuai
        } else {
            // If the user is not a guardian, redirect back or return an error
            return redirect()->back()->with('error', 'You do not have permission to view this data.');
        }
    }
}
