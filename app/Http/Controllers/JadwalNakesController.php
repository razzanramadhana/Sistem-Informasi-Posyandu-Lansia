<?php

namespace App\Http\Controllers;

use App\Models\JadwalPosyandu;
use Illuminate\Http\Request;

class JadwalNakesController extends Controller
{
    public function index()
    {
        // Fetch all schedules that have users with the role 'nakes'
        $jadwalNakes = JadwalPosyandu::with(['users' => function ($query) {
            $query->where('role', 'nakes');
        }])->get();
 
        // Create an array to hold the final schedule data
        $finalJadwalNakes = [];
 
        foreach ($jadwalNakes as $jadwal) {
            // Check if there are any users with the current jadwal
            if ($jadwal->users->isNotEmpty()) {
                // Prepare the final data with the jadwal details and associated users
                $finalJadwalNakes[] = [
                    'id' => $jadwal->id_jadwal, // Using the primary key
                    'tanggal' => $jadwal->tanggal_jadwal, // Assuming you want this field
                    'jam' => $jadwal->jam_jadwal, // Change this if 'jam' is not directly in the table
                    'users' => $jadwal->users, // Users associated with the schedule
                ];
            }
        }

        return view('jadwal nakes', compact('finalJadwalNakes')); // Pass final data to the view
    }
}
