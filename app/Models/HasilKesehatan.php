<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HasilKesehatan extends Model
{
    use HasFactory;

    protected $table = 'Hasil_Kesehatan'; // Nama tabel sesuai dengan database
    protected $primaryKey = 'id_hasil_kesehatan'; // Primary key

    protected $fillable = [
        'id_lansia',
        'id_kunjungan',
        'berat_badan',
        'tinggi_badan',
        'tekanan_darah',
        'gula_darah',
        'kolesterol',
    ];

    // Definisikan relasi dengan model Lansia dan Kunjungan jika perlu
    public function lansia()
    {
        return $this->belongsTo(Lansia::class, 'id_lansia');
    }

    public function kunjungan()
    {
        return $this->belongsTo(Kunjungan::class, 'id_kunjungan');
    }
}