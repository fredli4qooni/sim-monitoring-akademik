<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setting;

class SettingController extends Controller
{
    public function index()
    {
        $settings = Setting::all()->keyBy('key');
        return view('settings.index', compact('settings'));
    }

    public function update(Request $request)
    {
        $data = $request->except(['_token', '_method']);

        foreach ($data as $key => $value) {
            // Check if it's a checkbox (maintenance_mode)
            if ($key === 'maintenance_mode') {
                continue;
            }
            Setting::where('key', $key)->update(['value' => $value]);
        }

        // Handle boolean fields which might not be present in request if unchecked
        $maintenance = $request->has('maintenance_mode') ? '1' : '0';
        Setting::where('key', 'maintenance_mode')->update(['value' => $maintenance]);

        return redirect()->route('settings.index')->with('success', 'Pengaturan berhasil diperbarui!');
    }
}
