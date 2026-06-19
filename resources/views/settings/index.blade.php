<x-settings-layout activeTab="settings">
    
    <div class="space-y-6">
        @if(session('success'))
            <div class="bg-green-50 border border-green-200 text-green-700 px-4 py-3 rounded-2xl relative" role="alert">
                <span class="block sm:inline">{{ session('success') }}</span>
            </div>
        @endif

        <div class="bg-white rounded-3xl shadow-saas border border-slate-100/50 overflow-hidden">
            <div class="p-6 border-b border-slate-100 bg-slate-50/50">
                <h3 class="text-lg font-heading font-semibold text-slate-900">Parameter Aplikasi</h3>
                <p class="mt-1 text-sm text-slate-500">Sesuaikan parameter dasar dan batasan sistem prediksi.</p>
            </div>

            <div class="p-6 sm:p-8">
                <form method="POST" action="{{ route('settings.update') }}" class="space-y-6 max-w-2xl">
                    @csrf
                    
                    <!-- App Name -->
                    <div>
                        <x-input-label for="app_name" value="Nama Aplikasi" class="text-slate-700" />
                        <x-text-input id="app_name" name="app_name" type="text" class="mt-1 block w-full rounded-xl border-slate-200 focus:border-primary-500 focus:ring-primary-500 shadow-sm" :value="old('app_name', $settings['app_name']->value ?? '')" required autofocus />
                        @if(isset($settings['app_name']->description))
                            <p class="mt-2 text-sm text-slate-500">{{ $settings['app_name']->description }}</p>
                        @endif
                    </div>

                    <!-- Batas IPK -->
                    <div>
                        <x-input-label for="batas_ipk_aman" value="Batas IPK Aman" class="text-slate-700" />
                        <x-text-input id="batas_ipk_aman" name="batas_ipk_aman" type="number" step="0.01" class="mt-1 block w-full rounded-xl border-slate-200 focus:border-primary-500 focus:ring-primary-500 shadow-sm" :value="old('batas_ipk_aman', $settings['batas_ipk_aman']->value ?? '')" required />
                        @if(isset($settings['batas_ipk_aman']->description))
                            <p class="mt-2 text-sm text-slate-500">{{ $settings['batas_ipk_aman']->description }}</p>
                        @endif
                    </div>

                    <!-- Batas SKS -->
                    <div>
                        <x-input-label for="batas_sks_lulus" value="Batas SKS Lulus" class="text-slate-700" />
                        <x-text-input id="batas_sks_lulus" name="batas_sks_lulus" type="number" class="mt-1 block w-full rounded-xl border-slate-200 focus:border-primary-500 focus:ring-primary-500 shadow-sm" :value="old('batas_sks_lulus', $settings['batas_sks_lulus']->value ?? '')" required />
                        @if(isset($settings['batas_sks_lulus']->description))
                            <p class="mt-2 text-sm text-slate-500">{{ $settings['batas_sks_lulus']->description }}</p>
                        @endif
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
