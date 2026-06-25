<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;
use App\Models\PrediksiKelulusan;
use App\Models\DataTambahan;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $totalMahasiswa = Mahasiswa::count();
        
        $risikoTinggi = PrediksiKelulusan::where('status_risiko', 'Tinggi')->count();
        $risikoSedang = PrediksiKelulusan::where('status_risiko', 'Sedang')->count();
        $risikoRendah = PrediksiKelulusan::where('status_risiko', 'Rendah')->count();

        $prediksiTepatWaktu = PrediksiKelulusan::where('prediksi_sistem', 'Tepat Waktu')->count();
        $prediksiTerlambat = PrediksiKelulusan::where('prediksi_sistem', 'Terlambat')->count();
        $belumDiprediksi = $totalMahasiswa - ($prediksiTepatWaktu + $prediksiTerlambat);

        // Data chart distribusi per angkatan
        $chartAngkatan = Mahasiswa::selectRaw('angkatan, count(*) as total')
            ->groupBy('angkatan')
            ->orderBy('angkatan')
            ->pluck('total', 'angkatan')
            ->toArray();

        $angkatanLabels = array_keys($chartAngkatan);
        $angkatanData = array_values($chartAngkatan);

        // Daftar Mahasiswa Risiko Tinggi
        $highRiskStudents = PrediksiKelulusan::with('mahasiswa')
            ->where('status_risiko', 'Tinggi')
            ->orWhere('prediksi_sistem', 'Terlambat')
            ->take(5)
            ->get();

        return view('dashboard.index', compact(
            'totalMahasiswa', 
            'risikoTinggi', 
            'risikoSedang',
            'risikoRendah', 
            'prediksiTepatWaktu',
            'prediksiTerlambat',
            'belumDiprediksi',
            'angkatanLabels', 
            'angkatanData',
            'highRiskStudents'
        ));
    }
}
