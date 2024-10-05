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

        // Debugging: Check if user is authenticated and has 'wali' role
        if (!$user) {
            dd('User not authenticated');
        }
        if ($user->role !== 'wali') {
            dd('User is not a wali. Current role: ' . $user->role);
        }

        // Fetch health results for the elderly associated with the guardian (wali)
        $hasilKesehatan = HasilKesehatan::whereHas('lansia', function ($query) use ($user) {
            $query->where('id_user', $user->id);
        })->with('kunjungan')->get();

        // Debugging: Check if any results were fetched
        if ($hasilKesehatan->isEmpty()) {
            dd('No health results found for this wali');
        }

        // Debugging: Display the fetched data
        dd($hasilKesehatan->toArray());

        // Return view with the fetched data
        return view('hasil_kesehatan', compact('hasilKesehatan'));
    }
}