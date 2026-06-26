<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;

class MonitoringController extends Controller
{
    public function index(Request $request)
    {
        $query = Mahasiswa::with(['prediksiKelulusan', 'dataTambahan'])
            ->where('status_aktif', 'Aktif');

        if ($request->filled('angkatan')) {
            $query->where('angkatan', $request->angkatan);
        }

        if ($request->filled('status')) {
            $query->whereHas('prediksiKelulusan', function($q) use ($request) {
                $q->where('status_risiko', $request->status);
            });
        }

        if ($request->filled('search')) {
            $query->where(function($q) use ($request) {
                $q->where('nama', 'like', '%'.$request->search.'%')
                  ->orWhere('nim', 'like', '%'.$request->search.'%');
            });
        }

        $mahasiswas = $query->paginate(15);
        $listAngkatan = Mahasiswa::select('angkatan')->distinct()->orderBy('angkatan', 'desc')->pluck('angkatan');

        return view('monitoring.index', compact('mahasiswas', 'listAngkatan'));
    }

    public function show($id, \App\Services\DecisionTreePredictionService $predictor)
    {
        $selectedMahasiswa = Mahasiswa::with(['dataTambahan', 'prediksiKelulusan'])
            ->findOrFail($id);

        // Jika belum diprediksi atau butuh penyegaran, kita update
        if ($selectedMahasiswa->dataTambahan) {
            $predictor->updatePredictionForMahasiswa($selectedMahasiswa);
            $selectedMahasiswa->refresh();
        }
        
        $predictionDetails = $predictor->predictWithDetails($selectedMahasiswa);
        $rules = \App\Models\C45Rule::all();

        return view('monitoring.show', compact('selectedMahasiswa', 'predictionDetails', 'rules'));
    }

    public function runPrediction(\App\Services\DecisionTreePredictionService $predictor)
    {
        // Pastikan model sudah pernah dilatih (ada rule)
        $hasRules = \App\Models\C45Rule::exists();
        if (!$hasRules) {
            return back()->withErrors(['error' => 'Model belum dilatih! Silakan latih model terlebih dahulu di menu Data Latih.']);
        }

        // Ambil semua mahasiswa aktif yang punya data kuesioner
        $mahasiswaAktif = Mahasiswa::where('status_aktif', 'Aktif')
            ->whereHas('dataTambahan')
            ->with('dataTambahan')
            ->get();

        $count = 0;
        foreach ($mahasiswaAktif as $mhs) {
            $predictor->updatePredictionForMahasiswa($mhs);
            $count++;
        }

        return back()->with('success', "Berhasil menjalankan prediksi untuk {$count} mahasiswa aktif berdasarkan model terbaru.");
    }
}
