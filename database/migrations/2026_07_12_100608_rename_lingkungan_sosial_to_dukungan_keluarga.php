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
        Schema::table('data_tambahans', function (Blueprint $table) {
            $table->renameColumn('lingkungan_sosial', 'dukungan_keluarga');
        });

        DB::table('settings')->where('key', 'batas_sosial_mendukung')->update([
            'key' => 'batas_keluarga_mendukung',
            'description' => 'Batas skor Dukungan Keluarga Mendukung (Tinggi)'
        ]);
        DB::table('settings')->where('key', 'batas_sosial_cukup')->update([
            'key' => 'batas_keluarga_cukup',
            'description' => 'Batas skor Dukungan Keluarga Cukup (Sedang)'
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('dukungan_keluarga', function (Blueprint $table) {
            //
        });
    }
};
