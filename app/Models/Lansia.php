<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lansia extends Model
{
    use HasFactory;

    protected $table = 'Lansia';
    protected $primaryKey = 'id_lansia';
    public $timestamps = false;

    protected $fillable = [
        'nama',
        'tanggal_lahir',
        'jenis_kelamin',
        'alamat',
        'alergi_obat',
        'riwayat_penyakit',
        'vaksin',
        'no_telpon',
        'diagnosa',
        'obat_yang_diberikan',
        'id_user',
        'nik_lansia',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user', 'id_user');
    }

    public function kunjungan()
    {
        return $this->hasMany(Kunjungan::class, 'id_lansia', 'id_lansia');
    }
}
