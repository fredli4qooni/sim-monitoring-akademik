<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class PublicPredictionController extends Controller
{
    public function index()
    {
        return view('guest.cek-prediksi');
    }

    public function check(Request $request)
    {
        $request->validate([
            'nim' => 'required|string',
        ]);

        $mahasiswa = Mahasiswa::with(['dataTambahan', 'prediksiKelulusan'])
            ->where('nim', $request->nim)
            ->first();

        if (!$mahasiswa) {
            return back()->withInput()->with('error', 'Data mahasiswa dengan NPM tersebut tidak ditemukan atau belum terdaftar.');
        }

        return view('guest.cek-prediksi', compact('mahasiswa'));
    }
}
