<?php

namespace App\Services;

use App\Models\C45Rule;
use App\Models\Mahasiswa;

class DecisionTreePredictionService
{
    public function updatePredictionForMahasiswa(Mahasiswa $mhs)
    {
        $preprocessor = new DataPreprocessingService();
        $data = $preprocessor->preprocessSingleData($mhs);
        
        $prediction = $this->predict($data);
        
        $validPredictions = ['Tepat Waktu', 'Terlambat'];
        $prediksiSistem = in_array($prediction, $validPredictions) ? $prediction : null;
        $statusRisiko = $prediksiSistem === 'Tepat Waktu' ? 'Rendah' : ($prediksiSistem === 'Terlambat' ? 'Tinggi' : null);

        // Simpan prediksi
        $mhs->prediksiKelulusan()->updateOrCreate(
            ['mahasiswa_id' => $mhs->id],
            [
                'prediksi_sistem' => $prediksiSistem,
                'status_risiko' => $statusRisiko
            ]
        );
    }

    public function predict(array $data)
    {
        // Cari root node
        $rootNode = C45Rule::whereNull('parent_node')->first();

        if (!$rootNode) {
            return 'Belum Ditraining';
        }

        return $this->traverseTree($rootNode, $data);
    }

    protected function traverseTree($node, $data)
    {
        // Jika node adalah leaf, kembalikan label
        if ($node->label !== null) {
            return $node->label;
        }

        // Jika bukan leaf, lihat atribut apa yang dicek node ini
        $attribute = $node->attribute;
        
        // Ambil nilai atribut dari data testing
        $value = $data[$attribute] ?? null;

        if (!$value) {
            return 'Data Tidak Lengkap';
        }

        // Cari child node yang condition-nya cocok dengan nilai data
        $childNode = C45Rule::where('parent_node', $node->id)
                            ->where('condition', $value)
                            ->first();

        // Jika tidak ada rule yang cocok (kombinasi data baru yang tidak ada di training)
        if (!$childNode) {
            // Fallback: cari majority label dari semua leaf node di bawah node ini
            return $this->getMajorityFallback($node->id);
        }

        // Rekursif ke bawah
        return $this->traverseTree($childNode, $data);
    }

    protected function getMajorityFallback($nodeId)
    {
        // Ambil semua leaf node turunan (secara sederhana kita ambil leaf node manapun yang terbanyak)
        // Solusi simpel: kembalikan label paling sering muncul di database
        $majority = C45Rule::whereNotNull('label')
            ->select('label')
            ->selectRaw('count(*) as count')
            ->groupBy('label')
            ->orderBy('count', 'desc')
            ->first();

        return $majority ? $majority->label : 'Tidak Diketahui';
    }
}
