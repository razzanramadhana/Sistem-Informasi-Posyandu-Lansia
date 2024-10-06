<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrasiController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileWaliController;
use App\Http\Controllers\TampilLansia;
use App\Http\Controllers\TambahkanLansiaController;
use App\Http\Controllers\HasilKesehatanController;
use App\Http\Controllers\DataLansiaController;
use App\Http\Controllers\RujukanController;
use App\Http\Controllers\StatusRujukanController;
use App\Http\Controllers\JadwalNakesController;
use App\Http\Controllers\KelolaKunjunganController;

// Routes
Route::get('/', function () {
    return view('login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/profil-wali', function () {
    return view('profil wali');
});

Route::get('/profil-lansia', function () {
    return view('profil lansia');
});

Route::get('/kelola-kunjungan', function () {
    return view('kelola kunjungan');
});

Route::get('/hasil-kesehatan', function () {
    return view('hasil kesehatan');
});

Route::get('/status-rujukan', function () {
    return view('status rujukan');
});

Route::get('/tambahkan-lansia', function () {
    return view('tambahkan lansia');
});

Route::get('/registrasi-akun', function () {
    return view('registrasi akun');
});

Route::get('/dashboard-nakes', function () {
    return view('dashboard nakes');
});

Route::get('/jadwal-nakes', function () {
    return view('jadwal nakes');
});

Route::get('/input-hasil-kesehatan', function () {
    return view('input hasil kesehatan');
});
    
Route::get('/rujukan', function () {
    return view('rujukan');
});

Route::get('/detail-pasien', function () {
    return view('detail pasien');
});

Auth::routes();

Route::get('/register', [RegistrasiController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegistrasiController::class, 'register']);

// Halaman login
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');
Route::get('/dashboard', [ProfileWaliController::class, 'show'])->middleware('auth')->name('dashboard');

// Profil Lansia
Route::get('/profil-lansia', [TampilLansia::class, 'index'])->name('profil-lansia');

// Tambah Lansia
Route::get('/create-lansia', [TambahkanLansiaController::class, 'create'])->name('create-lansia');
Route::post('/store-lansia', [TambahkanLansiaController::class, 'store'])->name('store-lansia');

// Hasil Kesehatan
Route::get('/hasil-kesehatan', [HasilKesehatanController::class, 'index'])->name('hasil.kesehatan');

// Data Pasien
Route::get('/data-pasien', [DataLansiaController::class, 'index'])->name('data pasien');
Route::get('/data-pasien/{id}', [DataLansiaController::class, 'show'])->name('detail pasien');
Route::get('/lansia/{id}', [DataLansiaController::class, 'show'])->name('lansia.showdarirujukan');

// Rujukan
Route::resource('/rujukan', RujukanController::class);
Route::put('rujukan/{rujukan}', [RujukanController::class, 'update'])->name('rujukan.update');
Route::get('rujukan/fetchKunjungan', [RujukanController::class, 'fetchKunjungan'])->name('rujukan.fetchKunjungan');

// Status Rujukan
Route::get('/status-rujukan', [StatusRujukanController::class, 'index'])->name('status rujukan');

// Jadwal Nakes
Route::get('/jadwal-nakes', [JadwalNakesController::class, 'index'])->name('jadwal.nakes');

// Kelola Kunjungan
Route::middleware(['auth'])->group(function () {
    Route::get('/kelola-kunjungan', [KelolaKunjunganController::class, 'index'])->name('kelola-kunjungan');
    Route::get('/tambah-kunjungan', [KelolaKunjunganController::class, 'create'])->name('tambah-kunjungan');
    Route::get('/edit-kunjungan/{id}', [KelolaKunjunganController::class, 'edit'])->name('edit-kunjungan');
    Route::post('/edit-kunjungan/{id}', [KelolaKunjunganController::class, 'update'])->name('update-kunjungan');
    Route::delete('/hapus-kunjungan/{id}', [KelolaKunjunganController::class, 'destroy'])->name('hapus-kunjungan');
    Route::post('/store-kunjungan', [KelolaKunjunganController::class, 'store'])->name('store-kunjungan');
});

use App\Http\Controllers\InputHasilKesehatanController;

Route::get('/dashboard', function () {
    return view('dashboard'); // Ganti dengan view dashboard Anda
});


Route::get('/input-hasil-kesehatan', [InputHasilKesehatanController::class, 'create'])->name('input hasil kesehatan');
Route::post('/input-hasil-kesehatan', [InputHasilKesehatanController::class, 'store'])->name('input-hasil-kesehatan.store');


// Rute untuk melihat hasil kesehatan
Route::get('/input-hasil-kesehatan', [InputHasilKesehatanController::class, 'index'])->name('input hasil kesehatan');
