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
        $totalMahasiswa = Mahasiswa::where('status_aktif', 'Aktif')->count();
        
        $risikoTinggi = PrediksiKelulusan::whereHas('mahasiswa', function ($q) {
            $q->where('status_aktif', 'Aktif');
        })->where('status_risiko', 'Tinggi')->count();

        $risikoSedang = PrediksiKelulusan::whereHas('mahasiswa', function ($q) {
            $q->where('status_aktif', 'Aktif');
        })->where('status_risiko', 'Sedang')->count();

        $risikoRendah = PrediksiKelulusan::whereHas('mahasiswa', function ($q) {
            $q->where('status_aktif', 'Aktif');
        })->where('status_risiko', 'Rendah')->count();

        $prediksiTepatWaktu = PrediksiKelulusan::whereHas('mahasiswa', function ($q) {
            $q->where('status_aktif', 'Aktif');
        })->where('prediksi_sistem', 'Tepat Waktu')->count();

        $prediksiTerlambat = PrediksiKelulusan::whereHas('mahasiswa', function ($q) {
            $q->where('status_aktif', 'Aktif');
        })->where('prediksi_sistem', 'Tidak Tepat Waktu')->count();

        $belumDiprediksi = $totalMahasiswa - ($prediksiTepatWaktu + $prediksiTerlambat);

        // Data chart tren prediksi per angkatan
        $angkatanLabels = Mahasiswa::where('status_aktif', 'Aktif')->select('angkatan')->distinct()->orderBy('angkatan')->pluck('angkatan')->toArray();
        $trendTepatWaktu = [];
        $trendTidakTepatWaktu = [];

        foreach ($angkatanLabels as $angkatan) {
            $trendTepatWaktu[] = Mahasiswa::where('status_aktif', 'Aktif')->where('angkatan', $angkatan)
                ->whereHas('prediksiKelulusan', function ($q) {
                    $q->where('prediksi_sistem', 'Tepat Waktu');
                })->count();

            $trendTidakTepatWaktu[] = Mahasiswa::where('status_aktif', 'Aktif')->where('angkatan', $angkatan)
                ->whereHas('prediksiKelulusan', function ($q) {
                    $q->where('prediksi_sistem', 'Tidak Tepat Waktu');
                })->count();
        }

        // Daftar Mahasiswa Risiko Tinggi
        $highRiskStudents = PrediksiKelulusan::with('mahasiswa.dataTambahan')
            ->whereHas('mahasiswa', function ($q) {
                $q->where('status_aktif', 'Aktif');
            })
            ->where(function($q) {
                $q->where('status_risiko', 'Tinggi')
                  ->orWhere('prediksi_sistem', 'Tidak Tepat Waktu');
            })
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
            'trendTepatWaktu',
            'trendTidakTepatWaktu',
            'highRiskStudents'
        ));
    }
}
