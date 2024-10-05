<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // Memastikan user login dan mengirimkan data ke view
        $user = auth()->user();

        return view('dashboard', compact('user'));
    }
}