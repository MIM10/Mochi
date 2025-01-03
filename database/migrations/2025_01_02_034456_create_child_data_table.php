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
        Schema::create('child_data', function (Blueprint $table) {
            $table->id();
            $table->string('nama_anak');
            $table->string('usia');
            $table->enum('gender', ['perempuan', 'laki-laki']);
            $table->string('berat_badan');
            $table->string('tinggi_badan');
            $table->date('tanggal_pemeriksaan');
            $table->text('keluhan');
            $table->text('pertanyaan_pengguna');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('child_data');
    }
};
