<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center gap-4">
            <a href="{{ route('tambahan.index') }}" class="p-2 text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-200 transition-colors bg-white dark:bg-gray-800 rounded-lg border border-gray-200 dark:border-gray-700 shadow-sm">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
            </a>
            <div>
                <h2 class="font-heading font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                    Input Data Tambahan: {{ $mahasiswa->nama }}
                </h2>
            </div>
        </div>
    </x-slot>

    <div class="max-w-3xl mx-auto">
        <div class="bg-white dark:bg-gray-800 shadow-sm rounded-2xl border border-gray-100 dark:border-gray-700 overflow-hidden">
            <div class="p-6 sm:p-8">
                

                <form method="POST" action="{{ route('tambahan.update', $mahasiswa->id) }}" class="space-y-6">
                    @csrf
                    
                    <div>
                        <x-input-label for="ip_terakhir" value="IP Terakhir (Skala 0.00 - 4.00)" />
                        <x-text-input id="ip_terakhir" name="ip_terakhir" type="number" step="0.01" min="0" max="4" class="mt-1 block w-full" :value="old('ip_terakhir', optional($mahasiswa->dataTambahan)->ip_terakhir)" required />
                        <x-input-error class="mt-2" :messages="$errors->get('ip_terakhir')" />
                    </div>

                    <div>
                        <x-input-label for="kondisi_ekonomi" value="Kondisi Ekonomi (Skala 1-5)" />
                        <p class="text-xs text-gray-500 mb-2">1 = Sangat Kurang, 3 = Menengah, 5 = Sangat Mampu</p>
                        <select id="kondisi_ekonomi" name="kondisi_ekonomi" class="mt-1 block w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-primary-500 focus:ring-primary-500 rounded-md shadow-sm">
                            <option value="">-- Pilih Skala --</option>
                            @for($i=1; $i<=5; $i++)
                                <option value="{{ $i }}" {{ old('kondisi_ekonomi', optional($mahasiswa->dataTambahan)->kondisi_ekonomi) == $i ? 'selected' : '' }}>Skala {{ $i }}</option>
                            @endfor
                        </select>
                        <x-input-error class="mt-2" :messages="$errors->get('kondisi_ekonomi')" />
                    </div>

                    <div>
                        <x-input-label for="lingkungan_sosial" value="Lingkungan Sosial (Skala 1-5)" />
                        <p class="text-xs text-gray-500 mb-2">1 = Sangat Kurang Mendukung, 3 = Cukup, 5 = Sangat Mendukung</p>
                        <select id="lingkungan_sosial" name="lingkungan_sosial" class="mt-1 block w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-primary-500 focus:ring-primary-500 rounded-md shadow-sm">
                            <option value="">-- Pilih Skala --</option>
                            @for($i=1; $i<=5; $i++)
                                <option value="{{ $i }}" {{ old('lingkungan_sosial', optional($mahasiswa->dataTambahan)->lingkungan_sosial) == $i ? 'selected' : '' }}>Skala {{ $i }}</option>
                            @endfor
                        </select>
                        <x-input-error class="mt-2" :messages="$errors->get('lingkungan_sosial')" />
                    </div>

                    <div>
                        <x-input-label for="keaktifan_organisasi" value="Keaktifan Organisasi" />
                        <select id="keaktifan_organisasi" name="keaktifan_organisasi" class="mt-1 block w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-primary-500 focus:ring-primary-500 rounded-md shadow-sm">
                            <option value="">-- Pilih Status --</option>
                            <option value="1" {{ old('keaktifan_organisasi', optional($mahasiswa->dataTambahan)->keaktifan_organisasi) == '1' ? 'selected' : '' }}>Aktif Berorganisasi</option>
                            <option value="0" {{ old('keaktifan_organisasi', optional($mahasiswa->dataTambahan)->keaktifan_organisasi) == '0' ? 'selected' : '' }}>Tidak Aktif</option>
                        </select>
                        <x-input-error class="mt-2" :messages="$errors->get('keaktifan_organisasi')" />
                    </div>

                    <div>
                        <x-input-label for="layanan_akademik" value="Layanan Akademik (Skala 1-5)" />
                        <p class="text-xs text-gray-500 mb-2">1 = Sangat Kurang, 3 = Cukup, 5 = Sangat Memuaskan</p>
                        <select id="layanan_akademik" name="layanan_akademik" class="mt-1 block w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-primary-500 focus:ring-primary-500 rounded-md shadow-sm">
                            <option value="">-- Pilih Skala --</option>
                            @for($i=1; $i<=5; $i++)
                                <option value="{{ $i }}" {{ old('layanan_akademik', optional($mahasiswa->dataTambahan)->layanan_akademik) == $i ? 'selected' : '' }}>Skala {{ $i }}</option>
                            @endfor
                        </select>
                        <x-input-error class="mt-2" :messages="$errors->get('layanan_akademik')" />
                    </div>

                        <x-input-label for="asal_sekolah" value="Kategori Asal Sekolah" />
                        <select id="asal_sekolah" name="asal_sekolah" class="mt-1 block w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-primary-500 focus:ring-primary-500 rounded-md shadow-sm">
                            <option value="">-- Pilih Asal Sekolah --</option>
                            <option value="SMA" {{ old('asal_sekolah', optional($mahasiswa->dataTambahan)->asal_sekolah) == 'SMA' ? 'selected' : '' }}>SMA</option>
                            <option value="SMK" {{ old('asal_sekolah', optional($mahasiswa->dataTambahan)->asal_sekolah) == 'SMK' ? 'selected' : '' }}>SMK</option>
                            <option value="MA" {{ old('asal_sekolah', optional($mahasiswa->dataTambahan)->asal_sekolah) == 'MA' ? 'selected' : '' }}>MA</option>
                            <option value="Lainnya" {{ old('asal_sekolah', optional($mahasiswa->dataTambahan)->asal_sekolah) == 'Lainnya' ? 'selected' : '' }}>Lainnya</option>
                        </select>
                        <x-input-error class="mt-2" :messages="$errors->get('asal_sekolah')" />

                    <div class="flex items-center justify-end mt-8 pt-6 border-t border-gray-100 dark:border-gray-700">
                        <x-secondary-button type="button" onclick="window.history.back()" class="mr-3">
                            Batal
                        </x-secondary-button>
                        <x-primary-button>
                            Simpan Data Tambahan
                        </x-primary-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
