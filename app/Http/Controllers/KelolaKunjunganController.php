<?php

namespace App\Http\Controllers;

use App\Models\Kunjungan;
use App\Models\Lansia;
use App\Models\JadwalPosyandu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;

class KelolaKunjunganController extends Controller
{
    // Menampilkan daftar kunjungan
    public function index()
    {
        // Ambil data kunjungan beserta data lansia
        $kunjungan = Kunjungan::with('lansia')->get();
        
        // Ambil lansia berdasarkan pengguna yang sedang login
        $lansias = Lansia::where('id_user', Auth::id())->get();

        // Ambil data jadwal
        $jadwals = JadwalPosyandu::all(); // Atau sesuaikan query sesuai kebutuhan

        // Kembalikan view dengan data kunjungan, lansias, dan jadwals
        return view('kelola kunjungan', compact('kunjungan', 'lansias', 'jadwals'));
    }

    public function create()
    {
        // Ambil lansia berdasarkan pengguna yang sedang login
        $lansias = Lansia::where('id_user', Auth::id())->get();

        // Ambil data jadwal
        $jadwals = JadwalPosyandu::all(); // Atau sesuaikan query sesuai kebutuhan

        return view('kelola kunjungan', compact('lansias', 'jadwals'));
    }

    // Menyimpan kunjungan baru
    public function store(Request $request)
{
    // Validasi input
    $validatedData = $request->validate([
        'id_jadwal' => 'required|exists:jadwal_posyandu,id_jadwal',
        'id_lansia' => 'required|exists:lansia,id_lansia',
        'tanggal_kunjungan' => 'required|date',
    ]);

    // Hitung jumlah kunjungan untuk sesi yang dipilih pada tanggal tertentu
    $kunjunganCount = Kunjungan::where('id_jadwal', $request->id_jadwal)
        ->whereDate('tanggal_kunjungan', $request->tanggal_kunjungan)
        ->count();

    // Cek apakah jumlah kunjungan sudah mencapai batas
    if ($kunjunganCount >= 3) {
        return redirect()->back()->with('error', 'Jumlah kunjungan untuk sesi ini sudah mencapai batas maksimal (3 orang).');
    }

    // Cek apakah lansia sudah terdaftar pada tanggal yang sama untuk jadwal yang sama
    $existingKunjungan = Kunjungan::where('id_lansia', $request->id_lansia)
        ->where('id_jadwal', $request->id_jadwal)
        ->whereDate('tanggal_kunjungan', $request->tanggal_kunjungan)
        ->exists();

    if ($existingKunjungan) {
        return redirect()->back()->with('error', 'Lansia ini sudah terdaftar untuk jadwal ini pada tanggal tersebut.');
    }

    // Menyimpan data kunjungan dengan menambahkan id_user
    Kunjungan::create(array_merge($validatedData, ['id_user' => Auth::id()]));

    // Redirect dengan pesan sukses
    return redirect()->route('kelola-kunjungan')->with('success', 'Kunjungan berhasil ditambahkan.');
}

public function update(Request $request, $id)
{
    // Validasi inputan
    $request->validate([
        'id_jadwal' => 'required|exists:jadwal_posyandu,id_jadwal',
        'id_lansia' => 'required|exists:lansia,id_lansia',
        'tanggal_kunjungan' => 'required|date',
    ]);

    // Ambil data kunjungan berdasarkan ID
    $kunjungan = Kunjungan::findOrFail($id);

    // Hitung jumlah kunjungan untuk sesi yang dipilih pada tanggal tertentu, kecuali yang sedang diedit
    $kunjunganCount = Kunjungan::where('id_jadwal', $request->id_jadwal)
        ->whereDate('tanggal_kunjungan', $request->tanggal_kunjungan)
        ->where('id', '!=', $id) // Mengecualikan kunjungan yang sedang diedit
        ->count();

    // Cek apakah jumlah kunjungan sudah mencapai batas
    if ($kunjunganCount >= 3) {
        return redirect()->back()->with('error', 'Jumlah kunjungan untuk sesi ini sudah mencapai batas maksimal (3 orang).');
    }

    // Cek apakah lansia sudah terdaftar pada tanggal yang sama untuk jadwal yang sama, kecuali yang sedang diedit
    $existingKunjungan = Kunjungan::where('id_lansia', $request->id_lansia)
        ->where('id_jadwal', $request->id_jadwal)
        ->whereDate('tanggal_kunjungan', $request->tanggal_kunjungan)
        ->where('id', '!=', $id) // Mengecualikan kunjungan yang sedang diedit
        ->exists();

    if ($existingKunjungan) {
        return redirect()->back()->with('error', 'Lansia ini sudah terdaftar untuk jadwal ini pada tanggal tersebut.');
    }

    // Update data kunjungan
    $kunjungan->update([
        'id_jadwal' => $request->id_jadwal,
        'id_lansia' => $request->id_lansia,
        'tanggal_kunjungan' => $request->tanggal_kunjungan,
    ]);

    return redirect()->route('kelola-kunjungan')->with('success', 'Kunjungan berhasil diperbarui.');
    }
}