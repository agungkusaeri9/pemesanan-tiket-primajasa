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
            $table->foreignId('metode_pembayaran_id')->nullable()->constrained('metode_pembayaran');
            $table->bigInteger('total');
            $table->integer('status');
            $table->bigInteger('convenience_fee')->default(0);
            $table->bigInteger('handling_fee')->default(0);
            $table->foreignId('armada_jadwal_id')->nullable()->constrained('armada_jadwal');
            $table->date('tanggal_berangkat');
            $table->foreignId('user_id')->constrained('users')->cascadeOnDelete();
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
