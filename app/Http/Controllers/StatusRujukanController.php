<?php
namespace App\Http\Controllers;

use App\Models\Rujukan;
use App\Models\Lansia; // Import Lansia model
use Illuminate\Support\Facades\Auth;

class StatusRujukanController extends Controller
{
    public function index()
    {
        // Ambil ID pengguna yang sedang login
        $my_id = Auth::id(); // Dapatkan ID pengguna yang sedang login

        // Ambil data lansia yang dimiliki oleh pengguna yang sedang login
        $lansiaList = Lansia::where('id_user', $my_id)->pluck('id_lansia'); // Ambil id_lansia saja

        // Ambil rujukan berdasarkan id_lansia yang dimiliki oleh pengguna
        $rujukanlist = Rujukan::whereIn('id_lansia', $lansiaList)
            ->with(['lansia', 'rumah_sakit'])
            ->get(['id_rujukan', 'id_lansia', 'status_rujukan', 'id_rumah_sakit']);

        // Kirim data rujukan ke view
        return view('status rujukan', ['rujukanlist' => $rujukanlist]);
    }
}
