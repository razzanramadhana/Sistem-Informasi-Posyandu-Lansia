<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HasilKesehatan extends Model
{
    use HasFactory;

    protected $table = 'Hasil_Kesehatan';
    protected $primaryKey = 'id_hasil_kesehatan';
    public $timestamps = false;

    protected $fillable = [
        'id_kunjungan',
        'berat_badan',
        'tinggi_badan',
        'tekanan_darah',
        'gula_darah',
        'kolesterol',
    ];

    public function kunjungan()
    {
        return $this->belongsTo(Kunjungan::class, 'id_kunjungan', 'id_kunjungan');
    }

    public function lansia()
    {
        return $this->belongsTo(Lansia::class, 'id_lansia', 'id_lansia');
    }
}
