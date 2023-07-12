<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pembersihans', function (Blueprint $table) {
            $table->id();
            $table->string('gambar_tempat_pembersihan');
            $table->string('nama_lokasi');
            $table->string('alamat');
            $table->string('titik_koordinat');
            $table->integer('harga');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pembersihans');
    }
};
