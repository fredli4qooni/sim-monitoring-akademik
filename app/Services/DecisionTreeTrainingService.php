<?php

namespace App\Services;

use App\Models\C45Rule;

class DecisionTreeTrainingService
{
    protected $targetAttribute = 'label';
    protected $attributes = ['ipk', 'ekonomi', 'keluarga', 'pertemanan', 'organisasi', 'pengaruh_organisasi', 'layanan', 'sekolah'];

    public function train(array $dataset)
    {
        // Bersihkan rule lama sebelum training ulang
        C45Rule::truncate();

        // Mulai proses training rekursif
        $this->buildTree($dataset, $this->attributes, null, 'Root');
    }

    protected function buildTree($dataset, $attributes, $parentNodeId, $conditionValue)
    {
        if (empty($dataset)) {
            return;
        }

        // 1. Cek apakah semua data di dataset memiliki label yang sama
        $labels = array_column($dataset, $this->targetAttribute);
        $uniqueLabels = array_unique($labels);

        if (count($uniqueLabels) === 1) {
            // Leaf node: semua sama
            C45Rule::create([
                'parent_node' => $parentNodeId,
                'attribute' => null,
                'condition' => $conditionValue,
                'label' => reset($uniqueLabels),
                'entropy' => 0,
                'gain' => 0,
                'split_info' => 0,
                'gain_ratio' => 0
            ]);
            return;
        }

        // 2. Jika atribut sudah habis, kembalikan label terbanyak (majority vote)
        if (empty($attributes)) {
            $counts = array_count_values($labels);
            arsort($counts);
            $majorityLabel = array_key_first($counts);

            C45Rule::create([
                'parent_node' => $parentNodeId,
                'attribute' => null,
                'condition' => $conditionValue,
                'label' => $majorityLabel,
                'entropy' => 0,
                'gain' => 0,
                'split_info' => 0,
                'gain_ratio' => 0
            ]);
            return;
        }

        // 3. Hitung Entropy Total
        $entropyTotal = $this->calculateEntropy($dataset);

        // 4. Hitung Information Gain, Split Info, dan Gain Ratio untuk setiap atribut
        $gains = [];
        $gainRatios = [];
        $splitInfos = [];
        foreach ($attributes as $attribute) {
            $calc = $this->calculateGainAndSplitInfo($dataset, $attribute, $entropyTotal);
            $gains[$attribute] = $calc['gain'];
            $splitInfos[$attribute] = $calc['split_info'];
            $gainRatios[$attribute] = $calc['gain_ratio'];
        }

        // 5. Pilih atribut dengan Gain Ratio tertinggi (Kunci dari Algoritma C4.5)
        arsort($gainRatios);
        $bestAttribute = array_key_first($gainRatios);
        
        $bestGain = $gains[$bestAttribute];
        $bestSplitInfo = $splitInfos[$bestAttribute];
        $bestGainRatio = $gainRatios[$bestAttribute];

        // 6. Simpan node (cabang) ke database
        $node = C45Rule::create([
            'parent_node' => $parentNodeId,
            'attribute' => $bestAttribute,
            'condition' => $conditionValue,
            'label' => null, // Ini bukan leaf
            'entropy' => $entropyTotal,
            'gain' => $bestGain,
            'split_info' => $bestSplitInfo,
            'gain_ratio' => $bestGainRatio
        ]);

        // 7. Hapus atribut terbaik dari daftar untuk diproses ke cabang selanjutnya
        $remainingAttributes = array_diff($attributes, [$bestAttribute]);

        // 8. Pisahkan dataset berdasarkan nilai unik dari atribut terbaik
        $attributeValues = array_unique(array_column($dataset, $bestAttribute));

        foreach ($attributeValues as $value) {
            // Filter data yang memiliki nilai atribut ini
            $subset = array_filter($dataset, function ($row) use ($bestAttribute, $value) {
                return $row[$bestAttribute] === $value;
            });

            // Rekursif bangun tree untuk cabang ini
            $this->buildTree($subset, $remainingAttributes, $node->id, $value);
        }
    }

    protected function calculateEntropy($dataset)
    {
        $total = count($dataset);
        $labels = array_column($dataset, $this->targetAttribute);
        $counts = array_count_values($labels);

        $entropy = 0;
        foreach ($counts as $count) {
            $probability = $count / $total;
            $entropy -= $probability * log($probability, 2);
        }

        return $entropy;
    }

    protected function calculateGainAndSplitInfo($dataset, $attribute, $entropyTotal)
    {
        $total = count($dataset);
        $attributeValues = array_column($dataset, $attribute);
        $uniqueValues = array_unique($attributeValues);

        $entropyAttribute = 0;
        $splitInfo = 0;

        foreach ($uniqueValues as $value) {
            $subset = array_filter($dataset, function ($row) use ($attribute, $value) {
                return $row[$attribute] === $value;
            });

            $subsetTotal = count($subset);
            $probability = $subsetTotal / $total;
            
            $subsetEntropy = $this->calculateEntropy($subset);
            $entropyAttribute += $probability * $subsetEntropy;
            
            // C4.5 Split Info Calculation
            $splitInfo -= $probability * log($probability, 2);
        }

        $gain = $entropyTotal - $entropyAttribute;
        
        // Avoid division by zero
        $gainRatio = $splitInfo > 0 ? $gain / $splitInfo : 0;

        return [
            'gain' => $gain,
            'split_info' => $splitInfo,
            'gain_ratio' => $gainRatio
        ];
    }
}
