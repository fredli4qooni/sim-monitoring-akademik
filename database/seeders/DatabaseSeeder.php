<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User Admin
        User::factory()->create([
            'name' => 'Admin Akademik',
            'email' => 'admin@uinril.ac.id',
            'password' => bcrypt('password'),
            'role' => 'admin',
        ]);

        // User Prodi
        User::factory()->create([
            'name' => 'Kaprodi SI',
            'email' => 'prodi@uinril.ac.id',
            'password' => bcrypt('password'),
            'role' => 'prodi',
        ]);

        // Dummy Mahasiswa
        $mahasiswa1 = \App\Models\Mahasiswa::create([
            'nim' => '1911010001',
            'nama' => 'Ahmad Budi',
            'angkatan' => 2019,
            'status_aktif' => 'Lulus',
        ]);

        \App\Models\DataAkademik::create([
            'mahasiswa_id' => $mahasiswa1->id,
            'semester' => 8,
            'ips' => 3.20,
            'ipk' => 3.45,
            'total_sks' => 144,
        ]);

        \App\Models\DataTambahan::create([
            'mahasiswa_id' => $mahasiswa1->id,
            'kondisi_ekonomi' => 3,
            'keaktifan_organisasi' => true,
            'asal_sekolah' => 'SMA',
        ]);

        \App\Models\PrediksiKelulusan::create([
            'mahasiswa_id' => $mahasiswa1->id,
            'label_aktual' => 'Tepat Waktu',
        ]);
        
        $mahasiswa2 = \App\Models\Mahasiswa::create([
            'nim' => '1911010002',
            'nama' => 'Siti Aminah',
            'angkatan' => 2019,
            'status_aktif' => 'Lulus',
        ]);

        \App\Models\DataAkademik::create([
            'mahasiswa_id' => $mahasiswa2->id,
            'semester' => 8,
            'ips' => 2.50,
            'ipk' => 2.80,
            'total_sks' => 140,
        ]);

        \App\Models\DataTambahan::create([
            'mahasiswa_id' => $mahasiswa2->id,
            'kondisi_ekonomi' => 2,
            'keaktifan_organisasi' => false,
            'asal_sekolah' => 'SMK',
        ]);

        \App\Models\PrediksiKelulusan::create([
            'mahasiswa_id' => $mahasiswa2->id,
            'label_aktual' => 'Terlambat',
        ]);
    }
}
