<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    public function up()
    {
        Schema::create('user', function (Blueprint $table) {
            $table->id('id_user');
            $table->string('email', 100)->unique();
            $table->string('password', 255);
            $table->string('nama_lengkap', 100);
            $table->string('no_telpon', 20);
            $table->string('alamat', 100);
            $table->enum('jenis_kelamin', ['Laki-laki', 'Perempuan']);
            $table->enum('role', ['nakes', 'wali'])->default('wali');
            $table->unsignedBigInteger('id_jadwal')->nullable();
            $table->bigInteger('nik');

            $table->foreign('id_jadwal')->references('id_jadwal')->on('Jadwal_Posyandu')->onDelete('set null');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('user');
    }
}

