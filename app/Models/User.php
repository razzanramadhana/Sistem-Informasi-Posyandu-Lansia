<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory;

    protected $table = 'user';
    protected $primaryKey = 'id_user';
    public $timestamps = false;

    protected $fillable = [
        'email',
        'password',
        'nama_lengkap',
        'no_telpon',
        'alamat',
        'jenis_kelamin',
        'role',
        'id_jadwal',
        'nik',
    ];

    public function jadwal()
    {
        return $this->belongsTo(Jadwal_Posyandu::class, 'id_jadwal', 'id_jadwal');
    }

    public function lansia()
    {
        return $this->hasMany(Lansia::class, 'id_user', 'id_user');
    }
}
