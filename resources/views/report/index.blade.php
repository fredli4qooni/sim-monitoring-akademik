<x-app-layout>
    <x-slot name="header">
        <h2 class="font-heading font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Laporan Analisis & Cetak PDF') }}
        </h2>
    </x-slot>

    <div class="max-w-4xl mx-auto">
        <div class="bg-white shadow-saas rounded-3xl border border-slate-100/50 overflow-hidden">
            <div class="p-8">
                
                <div class="flex items-start gap-4 mb-8">
                    <div class="p-3 bg-red-50 dark:bg-red-900/30 rounded-xl text-red-600 dark:text-red-400">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                    </div>
                    <div>
                        <h3 class="text-xl font-heading font-bold text-slate-900">Cetak Laporan Prediksi Kelulusan</h3>
                        <p class="text-slate-500 text-sm mt-1">Silakan atur kriteria laporan yang ingin dicetak. Laporan akan otomatis menyesuaikan daftar mahasiswa beserta ringkasan IPK dan Prediksi AI C4.5.</p>
                    </div>
                </div>

                <form method="GET" action="{{ route('report.pdf') }}" target="_blank" class="space-y-6">
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <!-- Filter Angkatan -->
                        <div>
                            <x-input-label for="angkatan" value="Filter Angkatan" />
                            <select id="angkatan" name="angkatan" class="mt-1 block w-full py-2.5 px-3 border border-gray-300 dark:border-gray-700 rounded-xl bg-white dark:bg-gray-900 text-gray-900 dark:text-gray-100 focus:ring-primary-500 focus:border-primary-500 shadow-sm">
                                <option value="">Semua Angkatan</option>
                                @foreach($listAngkatan as $angk)
                                    <option value="{{ $angk }}">Angkatan {{ $angk }}</option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Filter Status Risiko -->
                        <div>
                            <x-input-label for="status" value="Filter Status Risiko (Prediksi)" />
                            <select id="status" name="status" class="mt-1 block w-full py-2.5 px-3 border border-gray-300 dark:border-gray-700 rounded-xl bg-white dark:bg-gray-900 text-gray-900 dark:text-gray-100 focus:ring-primary-500 focus:border-primary-500 shadow-sm">
                                <option value="">Semua Status</option>
                                <option value="Rendah">Tepat Waktu (Aman)</option>
                                <option value="Tinggi">Terlambat (Berisiko)</option>
                            </select>
                        </div>
                    </div>

                    <div class="pt-6 border-t border-slate-100">
                        <button type="submit" class="w-full inline-flex items-center justify-center px-6 py-3.5 border border-transparent rounded-2xl shadow-md shadow-red-600/20 text-base font-semibold text-white bg-red-600 hover:bg-red-500 transition-all focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 17h2a2 2 0 002-2v-4a2 2 0 00-2-2H5a2 2 0 00-2 2v4a2 2 0 002 2h2m2 4h6a2 2 0 002-2v-4a2 2 0 00-2-2H9a2 2 0 00-2 2v4a2 2 0 002 2zm8-12V5a2 2 0 00-2-2H9a2 2 0 00-2 2v4h10z"></path></svg>
                            Generate & Download PDF
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</x-app-layout>
