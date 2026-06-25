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

        $prediksi = $mahasiswa->prediksiKelulusan;
        $ipk = optional($mahasiswa->dataTambahan)->ip_terakhir ?? 0;

        return view('mahasiswa.dashboard', compact('mahasiswa', 'prediksi', 'ipk'));
    }
}
