<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrasiController;
use App\Http\Controllers\LoginController;


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

use App\Http\Controllers\DashboardController;

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');

use App\Http\Controllers\ProfileWaliController;

Route::get('/dashboard', [ProfileWaliController::class, 'show'])->middleware('auth')->name('dashboard');

use App\Http\Controllers\TampilLansia;

Route::get('/profil-lansia', [TampilLansia::class, 'index'])->name('profil-lansia');
use App\Http\Controllers\TambahkanLansiaController;

Route::get('/create-lansia', [TambahkanLansiaController::class, 'create'])->name('create-lansia');
Route::post('/store-lansia', [TambahkanLansiaController::class, 'store'])->name('store-lansia');

use App\Http\Controllers\ShowHasilKesehatanController;

Route::get('/hasil-kesehatan', [ShowHasilKesehatanController::class, 'index'])->name('hasil.kesehatan');

use App\Http\Controllers\StatusRujukanController;

Route::get('/status-rujukan', [StatusRujukanController::class, 'index'])->name('status.rujukan');


use App\Http\Controllers\DataLansiaController;

Route::get('/data-pasien', [DataLansiaController::class, 'index'])->name('data pasien');
Route::get('/data-pasien/{id}', [DataLansiaController::class, 'show'])->name('detail pasien');

use App\Http\Controllers\RujukanController;

Route::resource('/rujukan', RujukanController::class);
Route::put('rujukan/{rujukan}', [RujukanController::class, 'update'])->name('rujukan.update');
Route::get('rujukan/fetchKunjungan', [RujukanController::class, 'fetchKunjungan'])->name('rujukan.fetchKunjungan');
Route::get('/lansia/{id}', [DataLansiaController::class, 'show'])->name('lansia.showdarirujukan');


