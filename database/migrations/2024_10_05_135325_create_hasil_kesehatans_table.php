<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHasilKesehatansTable extends Migration
{
    public function up()
    {
        Schema::create('Hasil_Kesehatan', function (Blueprint $table) {
            $table->id('id_hasil_kesehatan');
            $table->unsignedBigInteger('id_kunjungan');
            $table->unsignedBigInteger('id_lansia');
            $table->float('berat_badan');
            $table->float('tinggi_badan');
            $table->string('tekanan_darah', 20);
            $table->string('gula_darah', 20);
            $table->string('kolesterol', 20);

            $table->foreign('id_kunjungan')->references('id_kunjungan')->on('Kunjungan')->onDelete('cascade');
            $table->foreign('id_lansia')->references('id_lansia')->on('Lansia')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('Hasil_Kesehatan');
    }
}

