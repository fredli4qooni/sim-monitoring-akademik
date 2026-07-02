<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use App\Services\DecisionTreePredictionService;
use Illuminate\Http\Request;

class DataLatihController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->get('search');
        $mahasiswas = Mahasiswa::with('prediksiKelulusan')
            ->where('status_aktif', 'Lulus')
            ->when($search, function ($query, $search) {
                return $query->where(function ($q) use ($search) {
                    $q->where('nama', 'like', "%{$search}%")
                      ->orWhere('nim', 'like', "%{$search}%");
                });
            })->latest()->paginate(10);
            
        return view('data-latih.index', compact('mahasiswas', 'search'));
    }

    public function create()
    {
        return view('data-latih.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nim' => 'required|string|unique:mahasiswas,nim',
            'nama' => 'required|string|max:255',
            'angkatan' => 'required|integer|min:2000|max:'.(date('Y') + 1),
            'semester_lulus' => 'required|integer|min:7|max:14',
            'ip_terakhir' => 'required|string',
            'kondisi_ekonomi' => 'required|string',
            'lingkungan_sosial' => 'required|string',
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
            'status_aktif' => 'Lulus',
            'semester_lulus' => $validated['semester_lulus'],
        ]);

        $mhs->dataTambahan()->create([
            'ip_terakhir' => $validated['ip_terakhir'],
            'kondisi_ekonomi' => $validated['kondisi_ekonomi'],
            'lingkungan_sosial' => $validated['lingkungan_sosial'],
            'lingkungan_pertemanan' => $validated['lingkungan_pertemanan'],
            'keaktifan_organisasi' => $validated['keaktifan_organisasi'],
            'pengaruh_organisasi' => $validated['pengaruh_organisasi'],
            'layanan_akademik' => $validated['layanan_akademik'],
            'asal_sekolah' => $validated['asal_sekolah'],
        ]);

        $label = $validated['semester_lulus'] <= 8 ? 'Tepat Waktu' : 'Tidak Tepat Waktu';

        $mhs->prediksiKelulusan()->updateOrCreate(
            ['mahasiswa_id' => $mhs->id],
            ['label_aktual' => $label]
        );

        return redirect()->route('data-latih.index')->with('success', 'Data Latih berhasil ditambahkan.');
    }

    public function edit(Mahasiswa $mahasiswa)
    {
        $mahasiswa->load(['dataTambahan', 'prediksiKelulusan']);
        return view('data-latih.edit', compact('mahasiswa'));
    }

    public function update(Request $request, Mahasiswa $mahasiswa)
    {
        $validated = $request->validate([
            'nim' => 'required|string|unique:mahasiswas,nim,' . $mahasiswa->id,
            'nama' => 'required|string|max:255',
            'angkatan' => 'required|integer|min:2000|max:'.(date('Y') + 1),
            'semester_lulus' => 'required|integer|min:7|max:14',
            'ip_terakhir' => 'required|string',
            'kondisi_ekonomi' => 'required|string',
            'lingkungan_sosial' => 'required|string',
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
            'status_aktif' => 'Lulus',
            'semester_lulus' => $validated['semester_lulus'],
        ]);

        $mahasiswa->dataTambahan()->updateOrCreate(
            ['mahasiswa_id' => $mahasiswa->id],
            [
                'ip_terakhir' => $validated['ip_terakhir'],
                'kondisi_ekonomi' => $validated['kondisi_ekonomi'],
                'lingkungan_sosial' => $validated['lingkungan_sosial'],
                'lingkungan_pertemanan' => $validated['lingkungan_pertemanan'],
                'keaktifan_organisasi' => $validated['keaktifan_organisasi'],
                'pengaruh_organisasi' => $validated['pengaruh_organisasi'],
                'layanan_akademik' => $validated['layanan_akademik'],
                'asal_sekolah' => $validated['asal_sekolah'],
            ]
        );

        $label = $validated['semester_lulus'] <= 8 ? 'Tepat Waktu' : 'Tidak Tepat Waktu';

        $mahasiswa->prediksiKelulusan()->updateOrCreate(
            ['mahasiswa_id' => $mahasiswa->id],
            ['label_aktual' => $label]
        );

        return redirect()->route('data-latih.index')->with('success', 'Data Latih berhasil diperbarui.');
    }

    public function destroy(Mahasiswa $mahasiswa)
    {
        $mahasiswa->delete();
        return redirect()->route('data-latih.index')->with('success', 'Data Latih berhasil dihapus.');
    }
}
