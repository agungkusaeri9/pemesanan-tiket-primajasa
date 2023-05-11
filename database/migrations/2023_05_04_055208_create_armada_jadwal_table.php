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
        Schema::create('armada_jadwal', function (Blueprint $table) {
            $table->id();
            $table->foreignId('jenis_armada_id')->constrained('jenis_armada')->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('terminal_pemberangkatan');
            $table->string('pemberangkatan');
            $table->string('tujuan');
            $table->string('terminal_tujuan');
            $table->string('jam_berangkat');
            $table->string('jam_sampai');
            $table->bigInteger('harga_dewasa')->nullable();
            $table->bigInteger('harga_anak_anak')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('armada_jadwal');
    }
};
