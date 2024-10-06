<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('Rujukan', function (Blueprint $table) {
            $table->unsignedBigInteger('id_lansia')->after('id_rujukan'); // Add the column after id_rujukan
        });
    }
    
    public function down()
    {
        Schema::table('Rujukan', function (Blueprint $table) {
            $table->dropColumn('id_lansia'); // Drop the column if needed
        });
    }
};
