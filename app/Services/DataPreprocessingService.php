<?php

namespace App\Services;

use App\Models\Mahasiswa;

class DataPreprocessingService
{
    /**
     * Mengambil seluruh data mahasiswa yang memiliki label kelulusan,
     * lalu mengubah nilai numerik menjadi kategori/diskrit untuk proses C4.5
     */
    public function getTrainingDataset()
    {
        // Ambil mahasiswa yang berstatus Lulus dan punya data tambahan
        $mahasiswas = Mahasiswa::with(['dataTambahan'])
            ->where('status_aktif', 'Lulus')
            ->whereNotNull('semester_lulus')
            ->get();

        $settings = \App\Models\Setting::whereIn('key', [
            'batas_ipk_tinggi', 'batas_ipk_sedang',
            'batas_ekonomi_mampu', 'batas_ekonomi_menengah',
            'batas_sosial_mendukung', 'batas_sosial_cukup',
            'batas_layanan_baik', 'batas_layanan_cukup'
        ])->pluck('value', 'key');

        $dataset = [];

        foreach ($mahasiswas as $mhs) {
            // Ambil IP Terakhir dari Data Tambahan
            $avgIpk = optional($mhs->dataTambahan)->ip_terakhir ?? 0;

            // Diskritkan IPK
            if ($avgIpk >= ($settings['batas_ipk_tinggi'] ?? 3.00)) {
                $kategoriIpk = 'Tinggi';
            } elseif ($avgIpk >= ($settings['batas_ipk_sedang'] ?? 2.50)) {
                $kategoriIpk = 'Sedang';
            } else {
                $kategoriIpk = 'Rendah';
            }



            // Diskritkan Ekonomi
            $ekonomi = optional($mhs->dataTambahan)->kondisi_ekonomi ?? 3;
            if ($ekonomi >= ($settings['batas_ekonomi_mampu'] ?? 4)) {
                $kategoriEkonomi = 'Mampu';
            } elseif ($ekonomi >= ($settings['batas_ekonomi_menengah'] ?? 3)) {
                $kategoriEkonomi = 'Menengah';
            } else {
                $kategoriEkonomi = 'Kurang';
            }

            // Diskritkan Sosial
            $sosial = optional($mhs->dataTambahan)->lingkungan_sosial ?? 3;
            if ($sosial >= ($settings['batas_sosial_mendukung'] ?? 4)) {
                $kategoriSosial = 'Mendukung';
            } elseif ($sosial >= ($settings['batas_sosial_cukup'] ?? 3)) {
                $kategoriSosial = 'Cukup';
            } else {
                $kategoriSosial = 'Kurang';
            }

            // Diskritkan Organisasi
            $organisasi = optional($mhs->dataTambahan)->keaktifan_organisasi ? 'Aktif' : 'Tidak Aktif';

            // Diskritkan Layanan Akademik
            $layanan = optional($mhs->dataTambahan)->layanan_akademik ?? 3;
            if ($layanan >= ($settings['batas_layanan_baik'] ?? 4)) {
                $kategoriLayanan = 'Baik';
            } elseif ($layanan >= ($settings['batas_layanan_cukup'] ?? 3)) {
                $kategoriLayanan = 'Cukup';
            } else {
                $kategoriLayanan = 'Kurang';
            }

            // Sekolah
            $sekolah = optional($mhs->dataTambahan)->asal_sekolah ?? 'Lainnya';
            $kategoriSekolah = strpos(strtolower($sekolah), 'smk') !== false ? 'SMK' : 
                              (strpos(strtolower($sekolah), 'sma') !== false ? 'SMA' : 'Lainnya');

            // Tentukan label kelulusan berdasarkan semester lulus
            $label = ($mhs->semester_lulus <= 8) ? 'Tepat Waktu' : 'Tidak Tepat Waktu';

            $dataset[] = [
                'mahasiswa_id' => $mhs->id,
                'ipk' => $kategoriIpk,
                'ekonomi' => $kategoriEkonomi,
                'sosial' => $kategoriSosial,
                'organisasi' => $organisasi,
                'layanan' => $kategoriLayanan,
                'sekolah' => $kategoriSekolah,
                'label' => $label
            ];
        }

        return $dataset;
    }

    /**
     * Memproses data 1 mahasiswa tertentu untuk keperluan prediksi
     */
    public function preprocessSingleData(Mahasiswa $mhs)
    {
        $settings = \App\Models\Setting::whereIn('key', [
            'batas_ipk_tinggi', 'batas_ipk_sedang',
            'batas_ekonomi_mampu', 'batas_ekonomi_menengah',
            'batas_sosial_mendukung', 'batas_sosial_cukup',
            'batas_layanan_baik', 'batas_layanan_cukup'
        ])->pluck('value', 'key');

        $avgIpk = optional($mhs->dataTambahan)->ip_terakhir ?? 0;

        if ($avgIpk >= ($settings['batas_ipk_tinggi'] ?? 3.00)) $kategoriIpk = 'Tinggi';
        elseif ($avgIpk >= ($settings['batas_ipk_sedang'] ?? 2.50)) $kategoriIpk = 'Sedang';
        else $kategoriIpk = 'Rendah';

        $ekonomi = optional($mhs->dataTambahan)->kondisi_ekonomi ?? 3;
        if ($ekonomi >= ($settings['batas_ekonomi_mampu'] ?? 4)) $kategoriEkonomi = 'Mampu';
        elseif ($ekonomi >= ($settings['batas_ekonomi_menengah'] ?? 3)) $kategoriEkonomi = 'Menengah';
        else $kategoriEkonomi = 'Kurang';

        $sosial = optional($mhs->dataTambahan)->lingkungan_sosial ?? 3;
        if ($sosial >= ($settings['batas_sosial_mendukung'] ?? 4)) $kategoriSosial = 'Mendukung';
        elseif ($sosial >= ($settings['batas_sosial_cukup'] ?? 3)) $kategoriSosial = 'Cukup';
        else $kategoriSosial = 'Kurang';

        $organisasi = optional($mhs->dataTambahan)->keaktifan_organisasi ? 'Aktif' : 'Tidak Aktif';

        $layanan = optional($mhs->dataTambahan)->layanan_akademik ?? 3;
        if ($layanan >= ($settings['batas_layanan_baik'] ?? 4)) $kategoriLayanan = 'Baik';
        elseif ($layanan >= ($settings['batas_layanan_cukup'] ?? 3)) $kategoriLayanan = 'Cukup';
        else $kategoriLayanan = 'Kurang';

        $sekolah = optional($mhs->dataTambahan)->asal_sekolah ?? 'Lainnya';
        $kategoriSekolah = strpos(strtolower($sekolah), 'smk') !== false ? 'SMK' : 
                          (strpos(strtolower($sekolah), 'sma') !== false ? 'SMA' : 'Lainnya');

        return [
            'ipk' => $kategoriIpk,
            'ekonomi' => $kategoriEkonomi,
            'sosial' => $kategoriSosial,
            'organisasi' => $organisasi,
            'layanan' => $kategoriLayanan,
            'sekolah' => $kategoriSekolah
        ];
    }
}
