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
        Schema::create('prediksi_kelulusans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('mahasiswa_id')->constrained('mahasiswas')->cascadeOnDelete();
            $table->enum('label_aktual', ['Tepat Waktu', 'Terlambat'])->nullable();
            $table->enum('prediksi_sistem', ['Tepat Waktu', 'Terlambat'])->nullable();
            $table->decimal('probabilitas', 5, 2)->nullable();
            $table->enum('status_risiko', ['Rendah', 'Sedang', 'Tinggi'])->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prediksi_kelulusans');
    }
};
