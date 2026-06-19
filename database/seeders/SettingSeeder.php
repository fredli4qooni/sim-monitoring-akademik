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
            ['key' => 'batas_ipk_aman', 'value' => '3.00', 'type' => 'string', 'description' => 'Batas IPK aman untuk kelulusan'],
            ['key' => 'batas_sks_lulus', 'value' => '144', 'type' => 'string', 'description' => 'Batas SKS minimal kelulusan'],
            ['key' => 'maintenance_mode', 'value' => '0', 'type' => 'boolean', 'description' => 'Aktifkan mode perbaikan sistem'],
        ];

        foreach ($settings as $setting) {
            Setting::firstOrCreate(['key' => $setting['key']], $setting);
        }
    }
}
