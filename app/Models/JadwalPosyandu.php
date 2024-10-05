<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jadwal_Posyandu extends Model
{
    use HasFactory;

    protected $table = 'Jadwal_Posyandu';
    protected $primaryKey = 'id_jadwal';
    public $timestamps = false;

    protected $fillable = [
        'tanggal_jadwal',
    ];

    public function users()
    {
        return $this->hasMany(User::class, 'id_jadwal', 'id_jadwal');
    }

    public function kunjungan()
    {
        return $this->hasMany(Kunjungan::class, 'id_jadwal', 'id_jadwal');
    }
}
