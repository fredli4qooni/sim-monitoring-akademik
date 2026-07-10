<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class PublicPredictionController extends Controller
{
    public function index()
    {
        $user = auth()->user();

        if ($user && $user->role === 'mahasiswa') {
            $mahasiswa = Mahasiswa::with(['dataTambahan', 'prediksiKelulusan'])
                ->find($user->mahasiswa_id);
                
            if ($mahasiswa) {
                return view('guest.cek-prediksi', compact('mahasiswa'));
            }
        }

        return view('guest.cek-prediksi');
    }

    public function check(Request $request)
    {
        $user = auth()->user();
        if ($user && $user->role === 'mahasiswa') {
            return redirect()->route('cek-prediksi');
        }

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
