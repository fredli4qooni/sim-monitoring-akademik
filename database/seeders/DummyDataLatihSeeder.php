<?php

namespace Database\Seeders;

use App\Models\Mahasiswa;
use App\Models\DataTambahan;
use App\Models\PrediksiKelulusan;
use Illuminate\Database\Seeder;

class DummyDataLatihSeeder extends Seeder
{
    public function run()
    {
        $data = [
            // IP Tinggi -> Tepat Waktu
            ['ip' => '3,51 - 4,00', 'eko' => '≥ Rp6.000.000', 'sos' => 'Sangat Mendukung', 'teman' => 'Sangat Mendukung', 'org' => 'Aktif', 'p_org' => 'Berpengaruh', 'layanan' => 'Sangat Berpengaruh', 'asal' => 'SMA', 'label' => 'Tepat Waktu'],
            ['ip' => '3,51 - 4,00', 'eko' => 'Rp4.000.000 - Rp6.000.000', 'sos' => 'Mendukung', 'teman' => 'Mendukung', 'org' => 'Kurang Aktif', 'p_org' => 'Cukup Berpengaruh', 'layanan' => 'Berpengaruh', 'asal' => 'SMK', 'label' => 'Tepat Waktu'],
            ['ip' => '3,51 - 4,00', 'eko' => '< Rp2.000.000', 'sos' => 'Mendukung', 'teman' => 'Sangat Mendukung', 'org' => 'Tidak Aktif', 'p_org' => 'Tidak Berpengaruh', 'layanan' => 'Sangat Berpengaruh', 'asal' => 'MA', 'label' => 'Tepat Waktu'],
            ['ip' => '3,51 - 4,00', 'eko' => 'Rp2.000.000 - Rp4.000.000', 'sos' => 'Sangat Mendukung', 'teman' => 'Mendukung', 'org' => 'Aktif', 'p_org' => 'Sangat Berpengaruh', 'layanan' => 'Berpengaruh', 'asal' => 'SMA', 'label' => 'Tepat Waktu'],
            ['ip' => '3,51 - 4,00', 'eko' => '≥ Rp6.000.000', 'sos' => 'Sangat Mendukung', 'teman' => 'Mendukung', 'org' => 'Tidak Aktif', 'p_org' => 'Tidak Berpengaruh', 'layanan' => 'Berpengaruh', 'asal' => 'SMA', 'label' => 'Tepat Waktu'],

            // IP Menengah (3.26 - 3.50) -> Tergantung Organisasi dan Ekonomi
            ['ip' => '3,26 - 3,50', 'eko' => '≥ Rp6.000.000', 'sos' => 'Mendukung', 'teman' => 'Mendukung', 'org' => 'Kurang Aktif', 'p_org' => 'Cukup Berpengaruh', 'layanan' => 'Berpengaruh', 'asal' => 'SMA', 'label' => 'Tepat Waktu'],
            ['ip' => '3,26 - 3,50', 'eko' => 'Rp4.000.000 - Rp6.000.000', 'sos' => 'Mendukung', 'teman' => 'Mendukung', 'org' => 'Kurang Aktif', 'p_org' => 'Kurang Berpengaruh', 'layanan' => 'Berpengaruh', 'asal' => 'SMK', 'label' => 'Tepat Waktu'],
            ['ip' => '3,26 - 3,50', 'eko' => '< Rp2.000.000', 'sos' => 'Kurang Mendukung', 'teman' => 'Kurang Mendukung', 'org' => 'Aktif', 'p_org' => 'Sangat Berpengaruh', 'layanan' => 'Cukup Berpengaruh', 'asal' => 'MA', 'label' => 'Tidak Tepat Waktu'],
            ['ip' => '3,26 - 3,50', 'eko' => '< Rp2.000.000', 'sos' => 'Kurang Mendukung', 'teman' => 'Cukup Mendukung', 'org' => 'Aktif', 'p_org' => 'Berpengaruh', 'layanan' => 'Cukup Berpengaruh', 'asal' => 'SMA', 'label' => 'Tidak Tepat Waktu'],
            ['ip' => '3,26 - 3,50', 'eko' => 'Rp2.000.000 - Rp4.000.000', 'sos' => 'Mendukung', 'teman' => 'Cukup Mendukung', 'org' => 'Aktif', 'p_org' => 'Berpengaruh', 'layanan' => 'Berpengaruh', 'asal' => 'SMK', 'label' => 'Tepat Waktu'],
            ['ip' => '3,26 - 3,50', 'eko' => 'Rp2.000.000 - Rp4.000.000', 'sos' => 'Mendukung', 'teman' => 'Sangat Mendukung', 'org' => 'Tidak Aktif', 'p_org' => 'Tidak Berpengaruh', 'layanan' => 'Cukup Berpengaruh', 'asal' => 'MA', 'label' => 'Tepat Waktu'],

            // IP Menengah Bawah (3.00 - 3.25) -> Tergantung Teman & Ekonomi
            ['ip' => '3,00 - 3,25', 'eko' => '< Rp2.000.000', 'sos' => 'Kurang Mendukung', 'teman' => 'Tidak Mendukung', 'org' => 'Kurang Aktif', 'p_org' => 'Kurang Berpengaruh', 'layanan' => 'Kurang Berpengaruh', 'asal' => 'SMA', 'label' => 'Tidak Tepat Waktu'],
            ['ip' => '3,00 - 3,25', 'eko' => '< Rp2.000.000', 'sos' => 'Kurang Mendukung', 'teman' => 'Kurang Mendukung', 'org' => 'Aktif', 'p_org' => 'Berpengaruh', 'layanan' => 'Kurang Berpengaruh', 'asal' => 'SMK', 'label' => 'Tidak Tepat Waktu'],
            ['ip' => '3,00 - 3,25', 'eko' => '≥ Rp6.000.000', 'sos' => 'Mendukung', 'teman' => 'Mendukung', 'org' => 'Aktif', 'p_org' => 'Sangat Berpengaruh', 'layanan' => 'Berpengaruh', 'asal' => 'SMA', 'label' => 'Tepat Waktu'],
            ['ip' => '3,00 - 3,25', 'eko' => 'Rp4.000.000 - Rp6.000.000', 'sos' => 'Sangat Mendukung', 'teman' => 'Mendukung', 'org' => 'Tidak Aktif', 'p_org' => 'Tidak Berpengaruh', 'layanan' => 'Berpengaruh', 'asal' => 'MA', 'label' => 'Tepat Waktu'],
            ['ip' => '3,00 - 3,25', 'eko' => 'Rp2.000.000 - Rp4.000.000', 'sos' => 'Cukup Mendukung', 'teman' => 'Kurang Mendukung', 'org' => 'Aktif', 'p_org' => 'Berpengaruh', 'layanan' => 'Cukup Berpengaruh', 'asal' => 'SMA', 'label' => 'Tidak Tepat Waktu'],

            // IP Rendah (< 3.00) -> Mayoritas Tidak Tepat Waktu
            ['ip' => '< 3,00', 'eko' => '< Rp2.000.000', 'sos' => 'Tidak Mendukung', 'teman' => 'Tidak Mendukung', 'org' => 'Aktif', 'p_org' => 'Berpengaruh', 'layanan' => 'Kurang Berpengaruh', 'asal' => 'SMA', 'label' => 'Tidak Tepat Waktu'],
            ['ip' => '< 3,00', 'eko' => 'Rp2.000.000 - Rp4.000.000', 'sos' => 'Kurang Mendukung', 'teman' => 'Kurang Mendukung', 'org' => 'Kurang Aktif', 'p_org' => 'Kurang Berpengaruh', 'layanan' => 'Kurang Berpengaruh', 'asal' => 'SMK', 'label' => 'Tidak Tepat Waktu'],
            ['ip' => '< 3,00', 'eko' => 'Rp4.000.000 - Rp6.000.000', 'sos' => 'Cukup Mendukung', 'teman' => 'Cukup Mendukung', 'org' => 'Tidak Aktif', 'p_org' => 'Tidak Berpengaruh', 'layanan' => 'Cukup Berpengaruh', 'asal' => 'SMA', 'label' => 'Tidak Tepat Waktu'],
            ['ip' => '< 3,00', 'eko' => '≥ Rp6.000.000', 'sos' => 'Sangat Mendukung', 'teman' => 'Sangat Mendukung', 'org' => 'Tidak Aktif', 'p_org' => 'Tidak Berpengaruh', 'layanan' => 'Sangat Berpengaruh', 'asal' => 'SMA', 'label' => 'Tepat Waktu'], // Outlier
            ['ip' => '< 3,00', 'eko' => '< Rp2.000.000', 'sos' => 'Kurang Mendukung', 'teman' => 'Tidak Mendukung', 'org' => 'Kurang Aktif', 'p_org' => 'Tidak Berpengaruh', 'layanan' => 'Kurang Berpengaruh', 'asal' => 'MA', 'label' => 'Tidak Tepat Waktu'],
        ];

        foreach ($data as $index => $item) {
            $mhs = Mahasiswa::create([
                'nim' => '191101' . str_pad($index + 100, 4, '0', STR_PAD_LEFT),
                'nama' => 'Dummy Data ' . ($index + 1),
                'angkatan' => 2019,
                'semester_lulus' => ($item['label'] == 'Tepat Waktu') ? rand(7, 8) : rand(9, 14),
                'status_aktif' => 'Lulus',
            ]);

            DataTambahan::create([
                'mahasiswa_id' => $mhs->id,
                'ip_terakhir' => $item['ip'],
                'kondisi_ekonomi' => $item['eko'],
                'lingkungan_sosial' => $item['sos'],
                'lingkungan_pertemanan' => $item['teman'],
                'keaktifan_organisasi' => $item['org'],
                'pengaruh_organisasi' => $item['p_org'],
                'layanan_akademik' => $item['layanan'],
                'asal_sekolah' => $item['asal'],
            ]);

            PrediksiKelulusan::updateOrCreate(
                ['mahasiswa_id' => $mhs->id],
                ['label_aktual' => $item['label']]
            );
        }
    }
}
