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
        $totalTrainingData = Mahasiswa::where('status_aktif', 'Lulus')
            ->whereNotNull('semester_lulus')
            ->count();
        
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

        // 3. (Dihapus) Prediksi massal dipindah ke tombol tersendiri di menu Prediksi
        
        return back()->with('success', 'Model Decision Tree C4.5 berhasil dilatih ulang berdasarkan data terbaru!');
    }
}
