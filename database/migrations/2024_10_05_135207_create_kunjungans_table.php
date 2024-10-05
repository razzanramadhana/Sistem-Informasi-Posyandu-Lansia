<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKunjungansTable extends Migration
{
    public function up()
    {
        Schema::create('Kunjungan', function (Blueprint $table) {
            $table->id('id_kunjungan');
            $table->unsignedBigInteger('id_jadwal');
            $table->unsignedBigInteger('id_lansia');
            $table->date('tanggal_kunjungan');
            
            $table->foreign('id_jadwal')->references('id_jadwal')->on('Jadwal_Posyandu')->onDelete('cascade');
            $table->foreign('id_lansia')->references('id_lansia')->on('Lansia')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('Kunjungan');
    }
}
