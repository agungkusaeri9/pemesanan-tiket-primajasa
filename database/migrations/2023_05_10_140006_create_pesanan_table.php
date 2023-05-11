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
        Schema::create('pesanan', function (Blueprint $table) {
            $table->id();
            $table->string('kode')->unique();
            $table->string('nama');
            $table->integer('metode_pembayaran')->nullable();
            $table->bigInteger('total');
            $table->integer('status');
            $table->bigInteger('convenience_fee')->default(0);
            $table->bigInteger('handling_fee')->default(0);
            $table->integer('armada_jadwal_id')->nullable();
            $table->date('tanggal_berangkat');
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
        Schema::dropIfExists('pesanan');
    }
};
