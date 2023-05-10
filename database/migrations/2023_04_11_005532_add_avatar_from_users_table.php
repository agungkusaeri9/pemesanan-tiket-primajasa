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
        Schema::table('users', function (Blueprint $table) {
            $table->string('nomor_telepon')->nullable();
            $table->string('kewarganegaraan')->nullable();
            $table->string('kota')->nullable();
            $table->enum('role',['admin','user'])->default('user')->after('password');
            $table->string('avatar')->nullable()->after('role');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('nomor_telepon');
            $table->dropColumn('kewarganegaraan');
            $table->dropColumn('kota');
            $table->dropColumn('role');
            $table->dropColumn('avatar');
        });
    }
};
