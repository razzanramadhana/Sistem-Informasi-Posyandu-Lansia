<?php

namespace App\Http\Controllers;

use App\Models\Rujukan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StatusRujukanController extends Controller
{
    public function index()
    {
        // Get the currently authenticated user
        $user = Auth::user();

        // Check if the user has the 'wali' role
        if ($user && $user->role === 'wali') {
            // Fetch rujukan data for the elderly associated with the guardian (wali)
            $rujukan = Rujukan::whereHas('kunjungan.lansia', function ($query) use ($user) {
                $query->where('id_user', $user->id);
            })
            ->with(['kunjungan.lansia', 'rumah_sakit'])
            ->get();

            // If no rujukan found, we'll pass an empty collection
            if ($rujukan->isEmpty()) {
                $rujukan = collect();
            }

            // Return view with the fetched data
            return view('status rujukan', compact('rujukan'));
        } else {
            // If the user is not a guardian, redirect back or return an error
            return redirect()->back()->with('error', 'You do not have permission to view this data.');
        }
    }
}