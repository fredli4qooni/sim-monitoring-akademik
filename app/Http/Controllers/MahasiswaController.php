<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->get('search');
        $mahasiswas = Mahasiswa::with('dataTambahan')
            ->where('status_aktif', 'Aktif')
            ->when($search, function ($query, $search) {
                return $query->where(function ($q) use ($search) {
                    $q->where('nama', 'like', "%{$search}%")
                      ->orWhere('nim', 'like', "%{$search}%");
                });
            })->latest()->paginate(10);

        return view('mahasiswa.index', compact('mahasiswas', 'search'));
    }

    public function create()
    {
        return view('mahasiswa.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nim' => 'required|string|unique:mahasiswas,nim',
            'nama' => 'required|string|max:255',
            'angkatan' => 'required|integer|min:2000|max:'.(date('Y') + 1),
            'status_aktif' => 'required|in:Aktif,Cuti,Lulus,Keluar',
            'ip_terakhir' => 'required|string',
            'kondisi_ekonomi' => 'required|string',
            'dukungan_keluarga' => 'required|string',
            'lingkungan_pertemanan' => 'required|string',
            'keaktifan_organisasi' => 'required|string',
            'pengaruh_organisasi' => 'required|string',
            'layanan_akademik' => 'required|string',
            'asal_sekolah' => 'required|string',
        ]);

        $mhs = Mahasiswa::create([
            'nim' => $validated['nim'],
            'nama' => $validated['nama'],
            'angkatan' => $validated['angkatan'],
            'status_aktif' => $validated['status_aktif'],
        ]);

        $mhs->dataTambahan()->create([
            'ip_terakhir' => $validated['ip_terakhir'],
            'kondisi_ekonomi' => $validated['kondisi_ekonomi'],
            'dukungan_keluarga' => $validated['dukungan_keluarga'],
            'lingkungan_pertemanan' => $validated['lingkungan_pertemanan'],
            'keaktifan_organisasi' => $validated['keaktifan_organisasi'],
            'pengaruh_organisasi' => $validated['pengaruh_organisasi'],
            'layanan_akademik' => $validated['layanan_akademik'],
            'asal_sekolah' => $validated['asal_sekolah'],
        ]);

        app(\App\Services\DecisionTreePredictionService::class)->updatePredictionForMahasiswa($mhs);

        return redirect()->route('mahasiswa.index')->with('success', 'Data Mahasiswa berhasil ditambahkan.');
    }

    public function edit(Mahasiswa $mahasiswa)
    {
        $mahasiswa->load('dataTambahan');
        return view('mahasiswa.edit', compact('mahasiswa'));
    }

    public function update(Request $request, Mahasiswa $mahasiswa)
    {
        $validated = $request->validate([
            'nim' => 'required|string|unique:mahasiswas,nim,' . $mahasiswa->id,
            'nama' => 'required|string|max:255',
            'angkatan' => 'required|integer|min:2000|max:'.(date('Y') + 1),
            'status_aktif' => 'required|in:Aktif,Cuti,Lulus,Keluar',
            'ip_terakhir' => 'required|string',
            'kondisi_ekonomi' => 'required|string',
            'dukungan_keluarga' => 'required|string',
            'lingkungan_pertemanan' => 'required|string',
            'keaktifan_organisasi' => 'required|string',
            'pengaruh_organisasi' => 'required|string',
            'layanan_akademik' => 'required|string',
            'asal_sekolah' => 'required|string',
        ]);

        $mahasiswa->update([
            'nim' => $validated['nim'],
            'nama' => $validated['nama'],
            'angkatan' => $validated['angkatan'],
            'status_aktif' => $validated['status_aktif'],
        ]);

        $mahasiswa->dataTambahan()->updateOrCreate(
            ['mahasiswa_id' => $mahasiswa->id],
            [
                'ip_terakhir' => $validated['ip_terakhir'],
                'kondisi_ekonomi' => $validated['kondisi_ekonomi'],
                'dukungan_keluarga' => $validated['dukungan_keluarga'],
                'lingkungan_pertemanan' => $validated['lingkungan_pertemanan'],
                'keaktifan_organisasi' => $validated['keaktifan_organisasi'],
                'pengaruh_organisasi' => $validated['pengaruh_organisasi'],
                'layanan_akademik' => $validated['layanan_akademik'],
                'asal_sekolah' => $validated['asal_sekolah'],
            ]
        );

        app(\App\Services\DecisionTreePredictionService::class)->updatePredictionForMahasiswa($mahasiswa);

        return redirect()->route('mahasiswa.index')->with('success', 'Data Mahasiswa berhasil diperbarui.');
    }

    public function destroy(Mahasiswa $mahasiswa)
    {
        $mahasiswa->delete();
        return redirect()->route('mahasiswa.index')->with('success', 'Data Mahasiswa berhasil dihapus.');
    }
}
