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

        $dataset = [];

        foreach ($mahasiswas as $mhs) {
            // Tentukan label kelulusan berdasarkan semester lulus
            $label = ($mhs->semester_lulus <= 8) ? 'Tepat Waktu' : 'Tidak Tepat Waktu';

            $dataset[] = [
                'mahasiswa_id' => $mhs->id,
                'ipk' => optional($mhs->dataTambahan)->ip_terakhir ?? '< 3,00',
                'ekonomi' => optional($mhs->dataTambahan)->kondisi_ekonomi ?? '< Rp2.000.000',
                'keluarga' => optional($mhs->dataTambahan)->dukungan_keluarga ?? 'Kurang Mendukung',
                'pertemanan' => optional($mhs->dataTambahan)->lingkungan_pertemanan ?? 'Kurang Mendukung',
                'organisasi' => optional($mhs->dataTambahan)->keaktifan_organisasi ?? 'Tidak Aktif',
                'pengaruh_organisasi' => optional($mhs->dataTambahan)->pengaruh_organisasi ?? 'Tidak Berpengaruh',
                'layanan' => optional($mhs->dataTambahan)->layanan_akademik ?? 'Kurang Berpengaruh',
                'sekolah' => optional($mhs->dataTambahan)->asal_sekolah ?? 'Lainnya',
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
        return [
            'ipk' => optional($mhs->dataTambahan)->ip_terakhir ?? '< 3,00',
            'ekonomi' => optional($mhs->dataTambahan)->kondisi_ekonomi ?? '< Rp2.000.000',
            'keluarga' => optional($mhs->dataTambahan)->dukungan_keluarga ?? 'Kurang Mendukung',
            'pertemanan' => optional($mhs->dataTambahan)->lingkungan_pertemanan ?? 'Kurang Mendukung',
            'organisasi' => optional($mhs->dataTambahan)->keaktifan_organisasi ?? 'Tidak Aktif',
            'pengaruh_organisasi' => optional($mhs->dataTambahan)->pengaruh_organisasi ?? 'Tidak Berpengaruh',
            'layanan' => optional($mhs->dataTambahan)->layanan_akademik ?? 'Kurang Berpengaruh',
            'sekolah' => optional($mhs->dataTambahan)->asal_sekolah ?? 'Lainnya'
        ];
    }
}
