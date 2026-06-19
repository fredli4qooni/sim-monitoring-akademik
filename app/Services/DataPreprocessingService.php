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
        // Ambil mahasiswa yang memiliki prediksi (sebagai label) dan data pendukung
        $mahasiswas = Mahasiswa::with(['dataAkademik', 'dataTambahan', 'prediksiKelulusan'])
            ->whereHas('prediksiKelulusan', function ($q) {
                $q->whereNotNull('label_aktual'); // Hanya yang punya label (Tepat Waktu/Terlambat)
            })->get();

        $dataset = [];

        foreach ($mahasiswas as $mhs) {
            // Hitung rata-rata IPK dan Total SKS
            $avgIpk = $mhs->dataAkademik->avg('ipk') ?? 0;
            $totalSks = $mhs->dataAkademik->sum('total_sks') ?? 0;

            // Diskritkan IPK
            if ($avgIpk >= 3.00) {
                $kategoriIpk = 'Tinggi';
            } elseif ($avgIpk >= 2.50) {
                $kategoriIpk = 'Sedang';
            } else {
                $kategoriIpk = 'Rendah';
            }

            // Diskritkan SKS (Misal standar normal 8 semester = 144)
            if ($totalSks >= 120) {
                $kategoriSks = 'Tinggi';
            } elseif ($totalSks >= 80) {
                $kategoriSks = 'Sedang';
            } else {
                $kategoriSks = 'Rendah';
            }

            // Diskritkan Ekonomi
            $ekonomi = optional($mhs->dataTambahan)->kondisi_ekonomi ?? 3;
            if ($ekonomi >= 4) {
                $kategoriEkonomi = 'Mampu';
            } elseif ($ekonomi == 3) {
                $kategoriEkonomi = 'Menengah';
            } else {
                $kategoriEkonomi = 'Kurang';
            }

            // Diskritkan Organisasi
            $organisasi = optional($mhs->dataTambahan)->keaktifan_organisasi ? 'Aktif' : 'Tidak Aktif';

            // Sekolah
            $sekolah = optional($mhs->dataTambahan)->asal_sekolah ?? 'Lainnya';
            $kategoriSekolah = strpos(strtolower($sekolah), 'smk') !== false ? 'SMK' : 
                              (strpos(strtolower($sekolah), 'sma') !== false ? 'SMA' : 'Lainnya');

            $dataset[] = [
                'mahasiswa_id' => $mhs->id,
                'ipk' => $kategoriIpk,
                'sks' => $kategoriSks,
                'ekonomi' => $kategoriEkonomi,
                'organisasi' => $organisasi,
                'sekolah' => $kategoriSekolah,
                'label' => $mhs->prediksiKelulusan->label_aktual
            ];
        }

        return $dataset;
    }

    /**
     * Memproses data 1 mahasiswa tertentu untuk keperluan prediksi
     */
    public function preprocessSingleData(Mahasiswa $mhs)
    {
        $avgIpk = $mhs->dataAkademik->avg('ipk') ?? 0;
        $totalSks = $mhs->dataAkademik->sum('total_sks') ?? 0;

        if ($avgIpk >= 3.00) $kategoriIpk = 'Tinggi';
        elseif ($avgIpk >= 2.50) $kategoriIpk = 'Sedang';
        else $kategoriIpk = 'Rendah';

        if ($totalSks >= 120) $kategoriSks = 'Tinggi';
        elseif ($totalSks >= 80) $kategoriSks = 'Sedang';
        else $kategoriSks = 'Rendah';

        $ekonomi = optional($mhs->dataTambahan)->kondisi_ekonomi ?? 3;
        if ($ekonomi >= 4) $kategoriEkonomi = 'Mampu';
        elseif ($ekonomi == 3) $kategoriEkonomi = 'Menengah';
        else $kategoriEkonomi = 'Kurang';

        $organisasi = optional($mhs->dataTambahan)->keaktifan_organisasi ? 'Aktif' : 'Tidak Aktif';

        $sekolah = optional($mhs->dataTambahan)->asal_sekolah ?? 'Lainnya';
        $kategoriSekolah = strpos(strtolower($sekolah), 'smk') !== false ? 'SMK' : 
                          (strpos(strtolower($sekolah), 'sma') !== false ? 'SMA' : 'Lainnya');

        return [
            'ipk' => $kategoriIpk,
            'sks' => $kategoriSks,
            'ekonomi' => $kategoriEkonomi,
            'organisasi' => $organisasi,
            'sekolah' => $kategoriSekolah
        ];
    }
}
