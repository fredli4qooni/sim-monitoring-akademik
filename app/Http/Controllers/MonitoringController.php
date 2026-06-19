<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;

class MonitoringController extends Controller
{
    public function index(Request $request)
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
}
