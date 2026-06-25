<x-app-layout>
    <x-slot name="header">
        <h2 class="font-heading font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Parameter Prediksi C4.5') }}
        </h2>
    </x-slot>

    <div class="space-y-6">
        @if(session('success'))
            <div class="bg-green-50 border border-green-200 text-green-700 px-4 py-3 rounded-2xl relative" role="alert">
                <span class="block sm:inline">{{ session('success') }}</span>
            </div>
        @endif

        <div class="bg-white rounded-3xl shadow-saas border border-slate-100/50 overflow-hidden">
            <div class="p-6 border-b border-slate-100 bg-slate-50/50">
                <h3 class="text-lg font-heading font-semibold text-slate-900">Konfigurasi Batas / Skor</h3>
                <p class="mt-1 text-sm text-slate-500">Nilai-nilai ini digunakan oleh algoritma C4.5 untuk mengubah isian angka kuesioner menjadi label kategori (Tinggi/Sedang/Rendah).</p>
            </div>

            <div class="p-6 sm:p-8">
                <form method="POST" action="{{ route('parameters.update') }}" class="space-y-6 max-w-4xl">
                    @csrf
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <!-- IPK Group -->
                        <div class="p-4 bg-slate-50 rounded-2xl border border-slate-100">
                            <h4 class="font-semibold text-slate-800 mb-4">Parameter IP Terakhir</h4>
                            
                            <div class="space-y-4">
                                <div>
                                    <x-input-label for="batas_ipk_tinggi" value="Batas Bawah IPK 'Tinggi'" class="text-slate-700" />
                                    <x-text-input id="batas_ipk_tinggi" name="batas_ipk_tinggi" type="number" step="0.01" class="mt-1 block w-full rounded-xl border-slate-200 focus:border-primary-500 shadow-sm" :value="old('batas_ipk_tinggi', $parameters['batas_ipk_tinggi']->value ?? '3.00')" required />
                                </div>
                                <div>
                                    <x-input-label for="batas_ipk_sedang" value="Batas Bawah IPK 'Sedang'" class="text-slate-700" />
                                    <x-text-input id="batas_ipk_sedang" name="batas_ipk_sedang" type="number" step="0.01" class="mt-1 block w-full rounded-xl border-slate-200 focus:border-primary-500 shadow-sm" :value="old('batas_ipk_sedang', $parameters['batas_ipk_sedang']->value ?? '2.50')" required />
                                </div>
                            </div>
                            <p class="text-xs text-slate-500 mt-3">* Jika IPK kurang dari batas sedang, akan dianggap 'Rendah'.</p>
                        </div>

                        <!-- Ekonomi Group -->
                        <div class="p-4 bg-slate-50 rounded-2xl border border-slate-100">
                            <h4 class="font-semibold text-slate-800 mb-4">Parameter Kondisi Ekonomi</h4>
                            
                            <div class="space-y-4">
                                <div>
                                    <x-input-label for="batas_ekonomi_mampu" value="Batas Skor 'Mampu'" class="text-slate-700" />
                                    <x-text-input id="batas_ekonomi_mampu" name="batas_ekonomi_mampu" type="number" step="1" class="mt-1 block w-full rounded-xl border-slate-200 focus:border-primary-500 shadow-sm" :value="old('batas_ekonomi_mampu', $parameters['batas_ekonomi_mampu']->value ?? '4')" required />
                                </div>
                                <div>
                                    <x-input-label for="batas_ekonomi_menengah" value="Batas Skor 'Menengah'" class="text-slate-700" />
                                    <x-text-input id="batas_ekonomi_menengah" name="batas_ekonomi_menengah" type="number" step="1" class="mt-1 block w-full rounded-xl border-slate-200 focus:border-primary-500 shadow-sm" :value="old('batas_ekonomi_menengah', $parameters['batas_ekonomi_menengah']->value ?? '3')" required />
                                </div>
                            </div>
                            <p class="text-xs text-slate-500 mt-3">* Jika skor kurang dari batas menengah, akan dianggap 'Kurang'.</p>
                        </div>

                        <!-- Sosial Group -->
                        <div class="p-4 bg-slate-50 rounded-2xl border border-slate-100">
                            <h4 class="font-semibold text-slate-800 mb-4">Parameter Lingkungan Sosial</h4>
                            
                            <div class="space-y-4">
                                <div>
                                    <x-input-label for="batas_sosial_mendukung" value="Batas Skor 'Mendukung'" class="text-slate-700" />
                                    <x-text-input id="batas_sosial_mendukung" name="batas_sosial_mendukung" type="number" step="1" class="mt-1 block w-full rounded-xl border-slate-200 focus:border-primary-500 shadow-sm" :value="old('batas_sosial_mendukung', $parameters['batas_sosial_mendukung']->value ?? '4')" required />
                                </div>
                                <div>
                                    <x-input-label for="batas_sosial_cukup" value="Batas Skor 'Cukup'" class="text-slate-700" />
                                    <x-text-input id="batas_sosial_cukup" name="batas_sosial_cukup" type="number" step="1" class="mt-1 block w-full rounded-xl border-slate-200 focus:border-primary-500 shadow-sm" :value="old('batas_sosial_cukup', $parameters['batas_sosial_cukup']->value ?? '3')" required />
                                </div>
                            </div>
                            <p class="text-xs text-slate-500 mt-3">* Jika skor kurang dari batas cukup, akan dianggap 'Kurang'.</p>
                        </div>

                        <!-- Layanan Group -->
                        <div class="p-4 bg-slate-50 rounded-2xl border border-slate-100">
                            <h4 class="font-semibold text-slate-800 mb-4">Parameter Layanan Akademik</h4>
                            
                            <div class="space-y-4">
                                <div>
                                    <x-input-label for="batas_layanan_baik" value="Batas Skor 'Baik'" class="text-slate-700" />
                                    <x-text-input id="batas_layanan_baik" name="batas_layanan_baik" type="number" step="1" class="mt-1 block w-full rounded-xl border-slate-200 focus:border-primary-500 shadow-sm" :value="old('batas_layanan_baik', $parameters['batas_layanan_baik']->value ?? '4')" required />
                                </div>
                                <div>
                                    <x-input-label for="batas_layanan_cukup" value="Batas Skor 'Cukup'" class="text-slate-700" />
                                    <x-text-input id="batas_layanan_cukup" name="batas_layanan_cukup" type="number" step="1" class="mt-1 block w-full rounded-xl border-slate-200 focus:border-primary-500 shadow-sm" :value="old('batas_layanan_cukup', $parameters['batas_layanan_cukup']->value ?? '3')" required />
                                </div>
                            </div>
                            <p class="text-xs text-slate-500 mt-3">* Jika skor kurang dari batas cukup, akan dianggap 'Kurang'.</p>
                        </div>
                    </div>

                    <div class="pt-6 border-t border-slate-100 flex justify-end">
                        <button type="submit" class="inline-flex items-center px-6 py-3 bg-primary-600 border border-transparent rounded-xl font-semibold text-xs text-white uppercase tracking-widest hover:bg-primary-500 focus:bg-primary-500 shadow-md shadow-primary-600/20">
                            Simpan Parameter
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
