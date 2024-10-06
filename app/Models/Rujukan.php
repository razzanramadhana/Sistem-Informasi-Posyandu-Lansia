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
        'id_lansia',
        'id_rujukan',
        'id_rumah_sakit',
        'status_rujukan',
    ];

    public function lansia()
    {
        return $this->belongsTo(Lansia::class, 'id_lansia', 'id_lansia');
    }

    // Relationship to the RumahSakit model
    public function rumah_sakit()
    {
        return $this->belongsTo(RumahSakit::class, 'id_rumah_sakit', 'id_rumah_sakit');
    }



}
