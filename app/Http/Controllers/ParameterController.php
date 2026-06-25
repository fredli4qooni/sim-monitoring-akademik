<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setting;

class ParameterController extends Controller
{
    public function index()
    {
        $parameters = Setting::whereIn('key', [
            'batas_ipk_tinggi', 'batas_ipk_sedang',
            'batas_ekonomi_mampu', 'batas_ekonomi_menengah',
            'batas_sosial_mendukung', 'batas_sosial_cukup',
            'batas_layanan_baik', 'batas_layanan_cukup'
        ])->get()->keyBy('key');

        return view('parameters.index', compact('parameters'));
    }

    public function update(Request $request)
    {
        $data = $request->except(['_token', '_method']);

        foreach ($data as $key => $value) {
            Setting::where('key', $key)->update(['value' => $value]);
        }

        return redirect()->route('parameters.index')->with('success', 'Parameter Prediksi berhasil diperbarui!');
    }
}
