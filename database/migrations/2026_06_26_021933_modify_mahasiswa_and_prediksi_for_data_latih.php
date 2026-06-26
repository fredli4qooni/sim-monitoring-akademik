<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('mahasiswas', function (Blueprint $table) {
            $table->integer('semester_lulus')->nullable()->after('status_aktif');
        });

        // Add 'Tidak Tepat Waktu' to ENUM
        DB::statement("ALTER TABLE prediksi_kelulusans MODIFY COLUMN label_aktual ENUM('Tepat Waktu', 'Terlambat', 'Tidak Tepat Waktu') NULL");
        DB::statement("ALTER TABLE prediksi_kelulusans MODIFY COLUMN prediksi_sistem ENUM('Tepat Waktu', 'Terlambat', 'Tidak Tepat Waktu') NULL");

        // Migrate data
        DB::table('prediksi_kelulusans')->where('label_aktual', 'Terlambat')->update(['label_aktual' => 'Tidak Tepat Waktu']);
        DB::table('prediksi_kelulusans')->where('prediksi_sistem', 'Terlambat')->update(['prediksi_sistem' => 'Tidak Tepat Waktu']);

        // Remove 'Terlambat' from ENUM
        DB::statement("ALTER TABLE prediksi_kelulusans MODIFY COLUMN label_aktual ENUM('Tepat Waktu', 'Tidak Tepat Waktu') NULL");
        DB::statement("ALTER TABLE prediksi_kelulusans MODIFY COLUMN prediksi_sistem ENUM('Tepat Waktu', 'Tidak Tepat Waktu') NULL");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Revert ENUM modifications
        DB::statement("ALTER TABLE prediksi_kelulusans MODIFY COLUMN label_aktual ENUM('Tepat Waktu', 'Terlambat', 'Tidak Tepat Waktu') NULL");
        DB::statement("ALTER TABLE prediksi_kelulusans MODIFY COLUMN prediksi_sistem ENUM('Tepat Waktu', 'Terlambat', 'Tidak Tepat Waktu') NULL");

        DB::table('prediksi_kelulusans')->where('label_aktual', 'Tidak Tepat Waktu')->update(['label_aktual' => 'Terlambat']);
        DB::table('prediksi_kelulusans')->where('prediksi_sistem', 'Tidak Tepat Waktu')->update(['prediksi_sistem' => 'Terlambat']);

        DB::statement("ALTER TABLE prediksi_kelulusans MODIFY COLUMN label_aktual ENUM('Tepat Waktu', 'Terlambat') NULL");
        DB::statement("ALTER TABLE prediksi_kelulusans MODIFY COLUMN prediksi_sistem ENUM('Tepat Waktu', 'Terlambat') NULL");

        Schema::table('mahasiswas', function (Blueprint $table) {
            $table->dropColumn('semester_lulus');
        });
    }
};
