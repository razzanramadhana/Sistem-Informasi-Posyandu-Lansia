<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJadwalPosyandusTable extends Migration
{
    public function up()
    {
        Schema::create('Jadwal_Posyandu', function (Blueprint $table) {
            $table->id('id_jadwal');
            $table->date('tanggal_jadwal');
            $table->time('jam_jadwal');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('Jadwal_Posyandu');
    }
}

