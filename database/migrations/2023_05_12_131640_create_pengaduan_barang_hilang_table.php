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
        Schema::create('pengaduan_barang_hilang', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal_berangkat');
            $table->foreignId('armada_jadwal_id')->constrained('armada_jadwal')->cascadeOnDelete();
            $table->string('nama_barang');
            $table->string('foto_barang')->nullable();
            $table->enum('status',[0,1,2,3])->default(0);
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
        Schema::dropIfExists('pengaduan_barang_hilang');
    }
};
