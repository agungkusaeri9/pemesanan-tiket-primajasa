<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('armada_jadwal', function (Blueprint $table) {
            $table->enum('keterangan_waktu',['pagi','siang','sore','malem']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('armada_jadwal', function (Blueprint $table) {
            $table->dropColumn('keterangan_waktu');
        });
    }
};
