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

        // Data chart distribusi per angkatan
        $chartAngkatan = Mahasiswa::selectRaw('angkatan, count(*) as total')
            ->groupBy('angkatan')
            ->orderBy('angkatan')
            ->pluck('total', 'angkatan')
            ->toArray();

        $angkatanLabels = array_keys($chartAngkatan);
        $angkatanData = array_values($chartAngkatan);

        // Data chart perkembangan akademik (Rata-rata IPS per Semester)
        $akademikData = DB::table('data_akademiks')
            ->select('semester', DB::raw('avg(ips) as avg_ips'))
            ->groupBy('semester')
            ->orderBy('semester')
            ->get();

        $ipsLabels = $akademikData->pluck('semester')->map(fn($s) => 'Smt ' . $s)->toArray();
        $ipsData = $akademikData->pluck('avg_ips')->map(fn($v) => round($v, 2))->toArray();

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
            'angkatanLabels', 
            'angkatanData',
            'ipsLabels',
            'ipsData',
            'highRiskStudents'
        ));
    }
}
