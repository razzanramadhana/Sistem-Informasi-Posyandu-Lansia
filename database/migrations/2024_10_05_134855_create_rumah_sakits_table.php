<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRumahSakitsTable extends Migration
{
    public function up()
    {
        Schema::create('Rumah_Sakit', function (Blueprint $table) {
            $table->id('id_rumah_sakit');
            $table->string('nama_rumah_sakit', 100);
            $table->string('alamat_rumah_sakit', 100);
            $table->string('no_telpon', 20)->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('Rumah_Sakit');
    }
}

