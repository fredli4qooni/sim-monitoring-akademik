<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaDashboardController extends Controller
{
    public function index()
    {
        $mahasiswa = auth()->user()->mahasiswa;
        
        if (!$mahasiswa) {
            return redirect()->route('dashboard')->with('error', 'Data mahasiswa tidak ditemukan.');
        }

        $dataAkademik = $mahasiswa->dataAkademik()->orderBy('semester', 'asc')->get();
        $prediksi = $mahasiswa->prediksiKelulusan;
        
        $totalSks = $dataAkademik->sum('sks');
        $ipk = $dataAkademik->count() > 0 ? number_format($dataAkademik->avg('ips'), 2) : 0;

        return view('mahasiswa.dashboard', compact('mahasiswa', 'dataAkademik', 'prediksi', 'totalSks', 'ipk'));
    }
}
