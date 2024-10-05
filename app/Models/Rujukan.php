<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rujukan extends Model
{
    use HasFactory;

    protected $table = 'Rujukan';
    protected $primaryKey = 'id_rujukan';
    public $timestamps = false;

    protected $fillable = [
        'id_rumah_sakit',
        'id_kunjungan',
        'status_rujukan',
    ];

    public function rumah_sakit()
    {
        return $this->belongsTo(Rumah_Sakit::class, 'id_rumah_sakit', 'id_rumah_sakit');
    }

    public function kunjungan()
    {
        return $this->belongsTo(Kunjungan::class, 'id_kunjungan', 'id_kunjungan');
    }
}
