<x-settings-layout activeTab="settings">
    
    <div class="space-y-6">
        @if(session('success'))
            <div class="bg-green-50 border border-green-200 text-green-700 px-4 py-3 rounded-2xl relative" role="alert">
                <span class="block sm:inline">{{ session('success') }}</span>
            </div>
        @endif

        <div class="bg-white rounded-3xl shadow-saas border border-slate-100/50 overflow-hidden">
            <div class="p-6 border-b border-slate-100 bg-slate-50/50">
                <h3 class="text-lg font-heading font-semibold text-slate-900">Pengaturan Tampilan Aplikasi</h3>
                <p class="mt-1 text-sm text-slate-500">Sesuaikan nama, logo, dan tema warna utama aplikasi.</p>
            </div>

            <div class="p-6 sm:p-8">
                <form method="POST" action="{{ route('settings.update') }}" class="space-y-6 max-w-2xl" enctype="multipart/form-data">
                    @csrf
                    
                    <!-- App Name -->
                    <div>
                        <x-input-label for="app_name" value="Nama Aplikasi" class="text-slate-700" />
                        <x-text-input id="app_name" name="app_name" type="text" class="mt-1 block w-full rounded-xl border-slate-200 focus:border-primary-500 focus:ring-primary-500 shadow-sm" :value="old('app_name', $settings['app_name']->value ?? '')" required autofocus />
                        @if(isset($settings['app_name']->description))
                            <p class="mt-2 text-sm text-slate-500">{{ $settings['app_name']->description }}</p>
                        @endif
                    </div>

                    <!-- Tema Aplikasi -->
                    <div>
                        <x-input-label for="app_theme_color" value="Warna Tema Utama" class="text-slate-700" />
                        <div class="mt-1 flex items-center gap-3">
                            <input id="app_theme_color" name="app_theme_color" type="color" class="h-10 w-14 rounded border border-slate-200 cursor-pointer" value="{{ old('app_theme_color', $settings['app_theme_color']->value ?? '#4f46e5') }}" required />
                            <span class="text-sm text-slate-500">Pilih warna untuk tombol dan aksen aplikasi.</span>
                        </div>
                    </div>

                    <!-- Logo Aplikasi -->
                    <div>
                        <x-input-label for="logo" value="Logo Aplikasi (opsional)" class="text-slate-700" />
                        
                        @if(isset($settings['app_logo']) && $settings['app_logo']->value)
                            <div class="mt-3 mb-4 p-4 border border-slate-200 rounded-xl bg-slate-50 flex items-center justify-between">
                                <div class="flex items-center gap-4">
                                    <img src="{{ asset('storage/' . $settings['app_logo']->value) }}" alt="Logo saat ini" class="h-12 w-12 object-contain rounded-lg shadow-sm border border-slate-200 bg-white">
                                    <span class="text-sm font-medium text-slate-700">Logo saat ini</span>
                                </div>
                                <label class="flex items-center gap-2 cursor-pointer text-red-600 hover:text-red-700 text-sm font-medium">
                                    <input type="checkbox" name="remove_logo" value="1" class="rounded border-gray-300 text-red-600 focus:ring-red-500">
                                    Hapus & Gunakan Icon Default
                                </label>
                            </div>
                        @endif

                        <input id="logo" name="logo" type="file" accept="image/*" class="mt-1 block w-full text-sm text-slate-500 file:mr-4 file:py-2 file:px-4 file:rounded-xl file:border-0 file:text-sm file:font-semibold file:bg-primary-50 file:text-primary-700 hover:file:bg-primary-100 transition-colors" />
                        <p class="mt-2 text-xs text-slate-500">Format: JPG, PNG, atau SVG. Rekomendasi rasio 1:1 (persegi).</p>
                    </div>

                    <!-- Maintenance Mode -->
                    <div class="flex items-start pt-4 border-t border-slate-100">
                        <div class="flex items-center h-5">
                            <input id="maintenance_mode" name="maintenance_mode" type="checkbox" value="1" {{ ($settings['maintenance_mode']->value ?? '0') == '1' ? 'checked' : '' }} class="w-5 h-5 text-primary-600 bg-slate-100 border-slate-300 rounded focus:ring-primary-500">
                        </div>
                        <div class="ml-3 text-sm">
                            <label for="maintenance_mode" class="font-medium text-slate-700">Mode Perbaikan (Maintenance)</label>
                            @if(isset($settings['maintenance_mode']->description))
                                <p class="text-slate-500">{{ $settings['maintenance_mode']->description }}</p>
                            @endif
                        </div>
                    </div>

                    <div class="pt-6">
                        <button type="submit" class="inline-flex items-center px-6 py-3 bg-primary-600 border border-transparent rounded-xl font-semibold text-xs text-white uppercase tracking-widest hover:bg-primary-500 focus:bg-primary-500 active:bg-primary-700 focus:outline-none focus:ring-2 focus:ring-primary-500 focus:ring-offset-2 transition ease-in-out duration-150 shadow-md shadow-primary-600/20">
                            Simpan Pengaturan
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</x-settings-layout>
