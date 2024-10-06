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
            $table->unsignedBigInteger('id_lansia');
            $table->string('status_rujukan', 100)->nullable();

            $table->foreign('id_rumah_sakit')->references('id_rumah_sakit')->on('Rumah_Sakit')->onDelete('cascade');
            $table->foreign('id_lansia')->references('id_lansia')->on('Lansia')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('Rujukan');
    }
}

