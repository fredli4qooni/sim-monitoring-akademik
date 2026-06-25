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
        $data = $request->except(['_token', '_method', 'logo']);

        // Handle file upload for logo
        if ($request->hasFile('logo')) {
            $file = $request->file('logo');
            // Check if there is an existing logo and maybe delete it
            $oldLogo = Setting::where('key', 'app_logo')->value('value');
            if ($oldLogo && \Illuminate\Support\Facades\Storage::disk('public')->exists($oldLogo)) {
                \Illuminate\Support\Facades\Storage::disk('public')->delete($oldLogo);
            }

            $path = $file->store('logos', 'public');
            Setting::updateOrCreate(['key' => 'app_logo'], ['value' => $path]);
        }

        // Handle logo removal
        if ($request->has('remove_logo') && $request->remove_logo == '1') {
            $oldLogo = Setting::where('key', 'app_logo')->value('value');
            if ($oldLogo && \Illuminate\Support\Facades\Storage::disk('public')->exists($oldLogo)) {
                \Illuminate\Support\Facades\Storage::disk('public')->delete($oldLogo);
            }
            Setting::updateOrCreate(['key' => 'app_logo'], ['value' => null]);
        }

        foreach ($data as $key => $value) {
            // Check if it's a checkbox (maintenance_mode, remove_logo)
            if (in_array($key, ['maintenance_mode', 'remove_logo'])) {
                continue;
            }
            Setting::updateOrCreate(['key' => $key], ['value' => $value]);
        }

        // Handle boolean fields which might not be present in request if unchecked
        $maintenance = $request->has('maintenance_mode') ? '1' : '0';
        Setting::updateOrCreate(['key' => 'maintenance_mode'], ['value' => $maintenance]);

        return redirect()->route('settings.index')->with('success', 'Pengaturan berhasil diperbarui!');
    }
}
