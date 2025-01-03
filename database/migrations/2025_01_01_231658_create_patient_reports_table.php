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
        Schema::create('patient_reports', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('doctor_id');
            $table->string('patient_name');
            $table->integer('age');
            $table->enum('gender', ['male', 'female']);
            $table->string('berat_badan');
            $table->string('tinggi_badan');
            $table->string('tgl_pemeriksaan');
            $table->text('keluhan');
            $table->text('pertanyaan_pengguna_id');
            $table->string('jenis_imunisasi');
            $table->text('catatan');
            $table->text('rekomendasi_perawatan');
            $table->timestamps();

            $table->foreign('doctor_id')->references('id')->on('doctors')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patient_reports');
    }
};
