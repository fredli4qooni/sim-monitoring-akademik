<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Setting;

class SettingSeeder extends Seeder
{
    public function run(): void
    {
        $settings = [
            ['key' => 'app_name', 'value' => 'SPK UIN RIL', 'type' => 'string', 'description' => 'Nama Singkat Aplikasi'],
            ['key' => 'maintenance_mode', 'value' => '0', 'type' => 'boolean', 'description' => 'Aktifkan mode perbaikan sistem'],
            
            // Parameter Prediksi
            ['key' => 'batas_ipk_tinggi', 'value' => '3.00', 'type' => 'string', 'description' => 'Batas bawah IPK Kategori Tinggi'],
            ['key' => 'batas_ipk_sedang', 'value' => '2.50', 'type' => 'string', 'description' => 'Batas bawah IPK Kategori Sedang'],
            ['key' => 'batas_ekonomi_mampu', 'value' => '4', 'type' => 'string', 'description' => 'Batas skor Ekonomi Kategori Mampu (Tinggi)'],
            ['key' => 'batas_ekonomi_menengah', 'value' => '3', 'type' => 'string', 'description' => 'Batas skor Ekonomi Kategori Menengah (Sedang)'],
            ['key' => 'batas_sosial_mendukung', 'value' => '4', 'type' => 'string', 'description' => 'Batas skor Lingkungan Sosial Mendukung (Tinggi)'],
            ['key' => 'batas_sosial_cukup', 'value' => '3', 'type' => 'string', 'description' => 'Batas skor Lingkungan Sosial Cukup (Sedang)'],
            ['key' => 'batas_layanan_baik', 'value' => '4', 'type' => 'string', 'description' => 'Batas skor Layanan Akademik Baik (Tinggi)'],
            ['key' => 'batas_layanan_cukup', 'value' => '3', 'type' => 'string', 'description' => 'Batas skor Layanan Akademik Cukup (Sedang)'],
        ];

        foreach ($settings as $setting) {
            Setting::firstOrCreate(['key' => $setting['key']], $setting);
        }
    }
}
