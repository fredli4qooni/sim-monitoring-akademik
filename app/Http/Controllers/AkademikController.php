<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use App\Models\DataAkademik;
use App\Services\DecisionTreePredictionService;
use Illuminate\Http\Request;

class AkademikController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->get('search');
        $mahasiswas = Mahasiswa::withCount('dataAkademik')
            ->withAvg('dataAkademik', 'ips')
            ->withSum('dataAkademik', 'total_sks')
            ->when($search, function ($query, $search) {
                return $query->where('nama', 'like', "%{$search}%")
                             ->orWhere('nim', 'like', "%{$search}%");
            })->latest()->paginate(10);
            
        return view('akademik.index', compact('mahasiswas', 'search'));
    }

    public function show(Mahasiswa $mahasiswa)
    {
        $mahasiswa->load(['dataAkademik' => function($query) {
            $query->orderBy('semester', 'asc');
        }]);
        return view('akademik.show', compact('mahasiswa'));
    }

    public function store(Request $request, Mahasiswa $mahasiswa)
    {
        $validated = $request->validate([
            'semester' => 'required|integer|min:1|max:14',
            'ips' => 'required|numeric|min:0|max:4',
            'ipk' => 'required|numeric|min:0|max:4',
            'total_sks' => 'required|integer|min:0|max:160',
        ]);
        
        if ($mahasiswa->dataAkademik()->where('semester', $validated['semester'])->exists()) {
            return back()->withErrors(['semester' => 'Data untuk semester ini sudah ada.'])->withInput();
        }

        $mahasiswa->dataAkademik()->create($validated);
        
        // Auto Update Prediksi
        app(DecisionTreePredictionService::class)->updatePredictionForMahasiswa($mahasiswa);

        return back()->with('success', 'Data semester berhasil ditambahkan.');
    }

    public function destroy(DataAkademik $dataAkademik)
    {
        $mahasiswa = $dataAkademik->mahasiswa;
        $dataAkademik->delete();
        
        // Auto Update Prediksi
        app(DecisionTreePredictionService::class)->updatePredictionForMahasiswa($mahasiswa);

        return back()->with('success', 'Data semester berhasil dihapus.');
    }
}
