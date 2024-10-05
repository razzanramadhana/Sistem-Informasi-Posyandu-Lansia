<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLansiasTable extends Migration
{
    public function up()
    {
        Schema::create('Lansia', function (Blueprint $table) {
            $table->id('id_lansia');
            $table->string('nama', 100);
            $table->date('tanggal_lahir');
            $table->enum('jenis_kelamin', ['Laki-laki', 'Perempuan']);
            $table->string('alamat', 100);
            $table->string('alergi_obat', 255)->nullable();
            $table->text('riwayat_penyakit')->nullable();
            $table->string('vaksin', 100)->nullable();
            $table->string('no_telpon', 20)->nullable();
            $table->text('diagnosa')->nullable();
            $table->text('obat_yang_diberikan')->nullable();
            $table->unsignedBigInteger('id_user');
            $table->bigInteger('nik_lansia');

            $table->foreign('id_user')->references('id_user')->on('user')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('Lansia');
    }
}

