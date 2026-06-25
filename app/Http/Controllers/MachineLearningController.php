<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\C45Rule;
use App\Models\Mahasiswa;
use App\Services\DataPreprocessingService;
use App\Services\DecisionTreeTrainingService;

class MachineLearningController extends Controller
{
    public function index()
    {
        $rulesCount = C45Rule::count();
        $totalTrainingData = Mahasiswa::whereHas('prediksiKelulusan', function ($q) {
            $q->whereNotNull('label_aktual');
        })->count();
        
        $rules = C45Rule::orderBy('id')->get();

        return view('ml.index', compact('rulesCount', 'totalTrainingData', 'rules'));
    }

    public function train(DataPreprocessingService $preprocessor, DecisionTreeTrainingService $trainer)
    {
        // 1. Ambil dataset yang sudah diubah menjadi kategori diskrit
        $dataset = $preprocessor->getTrainingDataset();

        if (empty($dataset)) {
            return back()->withErrors(['error' => 'Data training tidak mencukupi untuk membangun model.']);
        }

        // 2. Train model (membangun rule tree baru ke DB)
        $trainer->train($dataset);

        // 3. Update / Refresh prediksi semua mahasiswa menggunakan rule yang baru
        $predictor = app(\App\Services\DecisionTreePredictionService::class);
        $semuaMahasiswa = Mahasiswa::with('dataTambahan')->get();
        foreach ($semuaMahasiswa as $mhs) {
            // Hanya perbarui prediksi untuk mahasiswa yang punya data kuesioner
            if ($mhs->dataTambahan) {
                $predictor->updatePredictionForMahasiswa($mhs);
            }
        }

        return back()->with('success', 'Model Decision Tree C4.5 berhasil dilatih ulang dan seluruh prediksi telah diperbarui.');
    }
}
