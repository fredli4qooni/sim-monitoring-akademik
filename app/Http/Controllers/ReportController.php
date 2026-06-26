<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;
use Barryvdh\DomPDF\Facade\Pdf;

class ReportController extends Controller
{
    public function index(Request $request)
    {
        $listAngkatan = Mahasiswa::select('angkatan')->distinct()->orderBy('angkatan', 'desc')->pluck('angkatan');

        $query = Mahasiswa::where('status_aktif', 'Aktif')->with('prediksiKelulusan');

        if ($request->filled('angkatan')) {
            $query->where('angkatan', $request->angkatan);
        }

        $mahasiswas = $query->get();

        $totalMahasiswa = $mahasiswas->count();
        
        $tepatWaktu = 0;
        $tidakTepatWaktu = 0;
        $risikoTinggi = 0;
        $risikoSedang = 0;
        $risikoRendah = 0;

        foreach ($mahasiswas as $mhs) {
            $prediksi = optional($mhs->prediksiKelulusan)->prediksi_sistem;
            $risiko = optional($mhs->prediksiKelulusan)->status_risiko;

            if ($prediksi == 'Tepat Waktu') $tepatWaktu++;
            elseif ($prediksi == 'Tidak Tepat Waktu') $tidakTepatWaktu++;

            if ($risiko == 'Tinggi') $risikoTinggi++;
            elseif ($risiko == 'Sedang') $risikoSedang++;
            elseif ($risiko == 'Rendah') $risikoRendah++;
        }

        $pctTepatWaktu = $totalMahasiswa > 0 ? round(($tepatWaktu / $totalMahasiswa) * 100, 2) : 0;
        $pctTidakTepatWaktu = $totalMahasiswa > 0 ? round(($tidakTepatWaktu / $totalMahasiswa) * 100, 2) : 0;
        $pctRisikoTinggi = $totalMahasiswa > 0 ? round(($risikoTinggi / $totalMahasiswa) * 100, 2) : 0;
        $pctRisikoSedang = $totalMahasiswa > 0 ? round(($risikoSedang / $totalMahasiswa) * 100, 2) : 0;
        $pctRisikoRendah = $totalMahasiswa > 0 ? round(($risikoRendah / $totalMahasiswa) * 100, 2) : 0;

        return view('report.index', compact(
            'listAngkatan', 'totalMahasiswa', 'tepatWaktu', 'tidakTepatWaktu', 
            'risikoTinggi', 'risikoSedang', 'risikoRendah', 
            'pctTepatWaktu', 'pctTidakTepatWaktu', 'pctRisikoTinggi', 'pctRisikoSedang', 'pctRisikoRendah'
        ));
    }

    public function downloadPdf(Request $request)
    {
        $query = Mahasiswa::with(['prediksiKelulusan', 'dataTambahan']);

        if ($request->filled('angkatan')) {
            $query->where('angkatan', $request->angkatan);
        }
        if ($request->filled('status')) {
            $query->whereHas('prediksiKelulusan', function($q) use ($request) {
                $q->where('status_risiko', $request->status);
            });
        }

        $mahasiswas = $query->get();

        $pdf = Pdf::loadView('report.pdf', compact('mahasiswas'))
                  ->setPaper('a4', 'landscape');

        return $pdf->stream('Laporan_Monitoring_Akademik.pdf');
    }
}
