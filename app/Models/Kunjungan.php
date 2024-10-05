<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kunjungan extends Model
{
    use HasFactory;

    protected $table = 'Kunjungan';
    protected $primaryKey = 'id_kunjungan';
    public $timestamps = false;

    protected $fillable = [
        'id_jadwal',
        'id_lansia',
        'tanggal_kunjungan',
    ];

    public function jadwal()
    {
        return $this->belongsTo(Jadwal_Posyandu::class, 'id_jadwal', 'id_jadwal');
    }

    public function lansia()
    {
        return $this->belongsTo(Lansia::class, 'id_lansia', 'id_lansia');
    }

    public function hasil_kesehatan()
    {
        return $this->hasOne(Hasil_Kesehatan::class, 'id_kunjungan', 'id_kunjungan');
    }

    public function rujukan()
    {
        return $this->hasMany(Rujukan::class, 'id_kunjungan', 'id_kunjungan');
    }
}
