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
        Schema::create('pesanan_detail', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pesanan_id')->constrained('pesanan')->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('nama_lengkap')->nullable();
            $table->bigInteger('nik')->nullable();
            $table->string('title')->nullable();
            $table->string('nomor_kursi');
            $table->bigInteger('asuransi_perjalanan')->default(0);
            $table->bigInteger('harga_tiket');
            $table->bigInteger('total')->nullable();
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
        Schema::dropIfExists('pesanan_detail');
    }
};
