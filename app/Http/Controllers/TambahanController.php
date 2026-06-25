<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use App\Services\DecisionTreePredictionService;
use Illuminate\Http\Request;

class TambahanController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->get('search');
        $mahasiswas = Mahasiswa::with('dataTambahan')
            ->when($search, function ($query, $search) {
                return $query->where('nama', 'like', "%{$search}%")
                             ->orWhere('nim', 'like', "%{$search}%");
            })->latest()->paginate(10);
            
        return view('tambahan.index', compact('mahasiswas', 'search'));
    }

    public function edit(Mahasiswa $mahasiswa)
    {
        $mahasiswa->load('dataTambahan');
        return view('tambahan.edit', compact('mahasiswa'));
    }

    public function update(Request $request, Mahasiswa $mahasiswa)
    {
        $validated = $request->validate([
            'ip_terakhir' => 'required|numeric|min:0|max:4',
            'kondisi_ekonomi' => 'required|integer|min:1|max:5',
            'lingkungan_sosial' => 'required|integer|min:1|max:5',
            'keaktifan_organisasi' => 'required|boolean',
            'layanan_akademik' => 'required|integer|min:1|max:5',
            'asal_sekolah' => 'required|in:SMA,SMK,MA,Lainnya',
        ]);
        
        $mahasiswa->dataTambahan()->updateOrCreate(
            ['mahasiswa_id' => $mahasiswa->id],
            $validated
        );

        // Auto Update Prediksi
        app(DecisionTreePredictionService::class)->updatePredictionForMahasiswa($mahasiswa);

        return redirect()->route('tambahan.index')->with('success', 'Data Tambahan berhasil disimpan.');
    }
}
