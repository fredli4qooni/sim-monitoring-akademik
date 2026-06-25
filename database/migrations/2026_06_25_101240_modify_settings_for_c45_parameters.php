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
        // Hapus batas_sks_lulus dan batas_ipk_aman
        DB::table('settings')->whereIn('key', ['batas_sks_lulus', 'batas_ipk_aman'])->delete();

        // Tambah parameter baru
        $newSettings = [
            ['key' => 'batas_ipk_tinggi', 'value' => '3.00', 'type' => 'string', 'description' => 'Batas bawah IPK Kategori Tinggi'],
            ['key' => 'batas_ipk_sedang', 'value' => '2.50', 'type' => 'string', 'description' => 'Batas bawah IPK Kategori Sedang'],
            ['key' => 'batas_ekonomi_mampu', 'value' => '4', 'type' => 'string', 'description' => 'Batas skor Ekonomi Kategori Mampu (Tinggi)'],
            ['key' => 'batas_ekonomi_menengah', 'value' => '3', 'type' => 'string', 'description' => 'Batas skor Ekonomi Kategori Menengah (Sedang)'],
            ['key' => 'batas_sosial_mendukung', 'value' => '4', 'type' => 'string', 'description' => 'Batas skor Lingkungan Sosial Mendukung (Tinggi)'],
            ['key' => 'batas_sosial_cukup', 'value' => '3', 'type' => 'string', 'description' => 'Batas skor Lingkungan Sosial Cukup (Sedang)'],
            ['key' => 'batas_layanan_baik', 'value' => '4', 'type' => 'string', 'description' => 'Batas skor Layanan Akademik Baik (Tinggi)'],
            ['key' => 'batas_layanan_cukup', 'value' => '3', 'type' => 'string', 'description' => 'Batas skor Layanan Akademik Cukup (Sedang)'],
        ];

        foreach ($newSettings as $setting) {
            DB::table('settings')->updateOrInsert(['key' => $setting['key']], $setting);
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        $keys = [
            'batas_ipk_tinggi', 'batas_ipk_sedang', 
            'batas_ekonomi_mampu', 'batas_ekonomi_menengah',
            'batas_sosial_mendukung', 'batas_sosial_cukup',
            'batas_layanan_baik', 'batas_layanan_cukup'
        ];
        
        DB::table('settings')->whereIn('key', $keys)->delete();

        DB::table('settings')->insert([
            ['key' => 'batas_ipk_aman', 'value' => '3.00', 'type' => 'string', 'description' => 'Batas IPK aman untuk kelulusan'],
            ['key' => 'batas_sks_lulus', 'value' => '144', 'type' => 'string', 'description' => 'Batas SKS minimal kelulusan'],
        ]);
    }
};
