<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRujukansTable extends Migration
{
    public function up()
    {
        Schema::create('Rujukan', function (Blueprint $table) {
            $table->id('id_rujukan');
            $table->unsignedBigInteger('id_rumah_sakit');
            $table->unsignedBigInteger('id_kunjungan');
            $table->string('status_rujukan', 100);

            $table->foreign('id_rumah_sakit')->references('id_rumah_sakit')->on('Rumah_Sakit')->onDelete('cascade');
            $table->foreign('id_kunjungan')->references('id_kunjungan')->on('Kunjungan')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('Rujukan');
    }
}

