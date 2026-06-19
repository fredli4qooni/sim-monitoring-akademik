<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;
use Barryvdh\DomPDF\Facade\Pdf;

class ReportController extends Controller
{
    public function index()
    {
        $listAngkatan = Mahasiswa::select('angkatan')->distinct()->orderBy('angkatan', 'desc')->pluck('angkatan');
        return view('report.index', compact('listAngkatan'));
    }

    public function downloadPdf(Request $request)
    {
        $query = Mahasiswa::with(['prediksiKelulusan', 'dataAkademik']);

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
