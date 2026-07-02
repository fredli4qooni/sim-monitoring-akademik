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
        Schema::table('data_tambahans', function (Blueprint $table) {
            $table->string('ip_terakhir')->nullable()->change();
            $table->string('kondisi_ekonomi')->nullable()->change();
            $table->string('lingkungan_sosial')->nullable()->change();
            $table->string('lingkungan_pertemanan')->nullable()->after('lingkungan_sosial');
            $table->string('keaktifan_organisasi')->nullable()->change();
            $table->string('pengaruh_organisasi')->nullable()->after('keaktifan_organisasi');
            $table->string('layanan_akademik')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('data_tambahans', function (Blueprint $table) {
            $table->dropColumn(['lingkungan_pertemanan', 'pengaruh_organisasi']);
            // Changing back is complex depending on original types, we'll leave it as string or skip
        });
    }
};
