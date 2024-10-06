<?php
namespace App\Http\Controllers;

use App\Models\Rujukan;
use Illuminate\Http\Request;
use App\Models\RumahSakit;
use App\Models\Lansia;

class RujukanController extends Controller
{
    // Menampilkan semua rujukan (Read)
    public function index()
    {
        $rujukanList = Rujukan::with('lansia', 'rumah_sakit')->get();
        
        return view('rujukan.index', compact('rujukanList'));
    }

    // Menampilkan form untuk membuat rujukan baru (Create)
    public function create()
    {
        // Fetch lists of Lansia and Rumah Sakit
        $lansiaList = Lansia::all();
        $rumahSakitList = RumahSakit::all();

    
        // Return the view with the lists
        return view('rujukan.create', compact('lansiaList', 'rumahSakitList'));
    }

    public function store(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'id_lansia' => 'required|exists:lansia,id_lansia',
            'id_rumah_sakit' => 'required|exists:rumah_sakit,id_rumah_sakit',
            'status_rujukan' => 'required|string|max:255',
        ]);

        // Create a new Rujukan
        Rujukan::create([
            'id_lansia' => $request->id_lansia,
            'id_rumah_sakit' => $request->id_rumah_sakit,
            'status_rujukan' => $request->status_rujukan,
        ]);

        // Redirect with a success message
        return redirect()->route('rujukan.index')->with('success', 'Rujukan berhasil ditambahkan!');
    }
    

    // Menampilkan rujukan tertentu (Show)
    public function show($id)
    {
        $rujukan = Rujukan::findOrFail($id);
        return view('rujukan.show', compact('rujukan'));
    }

    // Menampilkan form untuk mengedit rujukan (Edit)
    public function edit($id)
    {
        $rujukan = Rujukan::findOrFail($id); // Fetch the record or throw a 404
        return view('rujukan.edit', compact('rujukan')); // Pass the $rujukan to the view
    }

    public function update(Request $request, $id)
    {
        // Validasi dan proses update data
        $statusrujukan = Rujukan::findOrFail($id);
        
        // Ensure you get the correct input name
        $statusrujukan->status_rujukan = $request->input('status'); // Updated to match the input field
    
        // Simpan perubahan
        $statusrujukan->save();
    
        // Redirect ke halaman rujukan setelah update
        return redirect()->route('rujukan.index')->with('success', 'Rujukan berhasil diperbarui!');
    }
    

    // Menghapus rujukan dari database (Delete)
    public function destroy($id)
    {
        $rujukan = Rujukan::findOrFail($id);
        $rujukan->delete();
        return redirect()->route('rujukan.index')->with('success', 'Rujukan deleted successfully.');
    }

    public function fetchKunjungan(Request $request)
    {
        $id_lansia = $request->get('id_lansia');
    
        // Cek jika id_lansia ada
        if (!$id_lansia) {
            return response()->json([], 400); // Mengembalikan error jika tidak ada id_lansia
        }
    
        // Fetch kunjungan berdasarkan id_lansia
        $kunjunganList = Kunjungan::where('id_lansia', $id_lansia)->get(['id_kunjungan', 'tanggal_kunjungan']);
    
        // Cek jika ada kunjungan
        if ($kunjunganList->isEmpty()) {
            return response()->json([], 404); // Mengembalikan not found jika tidak ada kunjungan
        }
    
        return response()->json($kunjunganList);
    }
    
    
}
