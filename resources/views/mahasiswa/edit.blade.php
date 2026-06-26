<x-app-layout>
    <x-slot name="header">
        <h2 class="font-heading font-semibold text-xl text-slate-800 dark:text-slate-200 leading-tight">
            {{ __('Edit Data Mahasiswa') }}
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-saas rounded-3xl border border-slate-100/50 p-8">
                
                <form method="POST" action="{{ route('mahasiswa.update', $mahasiswa->id) }}" class="space-y-6">
                    @csrf
                    @method('PUT')

                    <div>
                        <x-input-label for="nim" :value="__('NIM')" />
                        <x-text-input id="nim" class="block mt-1 w-full bg-slate-50 text-slate-500" type="text" name="nim" :value="old('nim', $mahasiswa->nim)" required readonly />
                        <x-input-error :messages="$errors->get('nim')" class="mt-2" />
                    </div>

                    <div>
                        <x-input-label for="nama" :value="__('Nama Lengkap')" />
                        <x-text-input id="nama" class="block mt-1 w-full" type="text" name="nama" :value="old('nama', $mahasiswa->nama)" required autofocus />
                        <x-input-error :messages="$errors->get('nama')" class="mt-2" />
                    </div>

                    <div>
                        <x-input-label for="angkatan" :value="__('Tahun Angkatan')" />
                        <x-text-input id="angkatan" class="block mt-1 w-full" type="number" name="angkatan" :value="old('angkatan', $mahasiswa->angkatan)" min="2000" max="{{ date('Y')+1 }}" required />
                        <x-input-error :messages="$errors->get('angkatan')" class="mt-2" />
                    </div>

                    <div class="hidden">
                        <x-input-label for="status_aktif" :value="__('Status Mahasiswa')" />
                        <select id="status_aktif" name="status_aktif" class="block mt-1 w-full border-gray-300 focus:border-primary-500 focus:ring-primary-500 rounded-xl shadow-sm" required>
                            <option value="Aktif" {{ old('status_aktif', $mahasiswa->status_aktif) === 'Aktif' ? 'selected' : '' }}>Aktif</option>
                            <option value="Cuti" {{ old('status_aktif', $mahasiswa->status_aktif) === 'Cuti' ? 'selected' : '' }}>Cuti</option>
                            <option value="Keluar" {{ old('status_aktif', $mahasiswa->status_aktif) === 'Keluar' ? 'selected' : '' }}>Keluar</option>
                        </select>
                        <x-input-error :messages="$errors->get('status_aktif')" class="mt-2" />
                    </div>

                    <div class="pt-6 border-t border-slate-100">
                        <h3 class="font-heading font-semibold text-lg text-slate-800 mb-4">Parameter Kuesioner Akademik</h3>
                        
                        <div class="space-y-6">
                            <div>
                                <x-input-label for="ip_terakhir" value="IP Terakhir (Skala 0.00 - 4.00)" />
                                <x-text-input id="ip_terakhir" name="ip_terakhir" type="number" step="0.01" min="0" max="4" class="mt-1 block w-full rounded-xl" :value="old('ip_terakhir', optional($mahasiswa->dataTambahan)->ip_terakhir)" required />
                                <x-input-error class="mt-2" :messages="$errors->get('ip_terakhir')" />
                            </div>

                            <div>
                                <x-input-label for="kondisi_ekonomi" value="Kondisi Ekonomi (Skala 1-5)" />
                                <p class="text-xs text-gray-500 mb-2">1 = Sangat Kurang, 3 = Menengah, 5 = Sangat Mampu</p>
                                <select id="kondisi_ekonomi" name="kondisi_ekonomi" class="mt-1 block w-full border-gray-300 focus:border-primary-500 focus:ring-primary-500 rounded-xl shadow-sm" required>
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
                                <select id="lingkungan_sosial" name="lingkungan_sosial" class="mt-1 block w-full border-gray-300 focus:border-primary-500 focus:ring-primary-500 rounded-xl shadow-sm" required>
                                    <option value="">-- Pilih Skala --</option>
                                    @for($i=1; $i<=5; $i++)
                                        <option value="{{ $i }}" {{ old('lingkungan_sosial', optional($mahasiswa->dataTambahan)->lingkungan_sosial) == $i ? 'selected' : '' }}>Skala {{ $i }}</option>
                                    @endfor
                                </select>
                                <x-input-error class="mt-2" :messages="$errors->get('lingkungan_sosial')" />
                            </div>

                            <div>
                                <x-input-label for="keaktifan_organisasi" value="Keaktifan Organisasi" />
                                <select id="keaktifan_organisasi" name="keaktifan_organisasi" class="mt-1 block w-full border-gray-300 focus:border-primary-500 focus:ring-primary-500 rounded-xl shadow-sm" required>
                                    <option value="">-- Pilih Status --</option>
                                    <option value="1" {{ old('keaktifan_organisasi', optional($mahasiswa->dataTambahan)->keaktifan_organisasi) == '1' ? 'selected' : '' }}>Aktif Berorganisasi</option>
                                    <option value="0" {{ old('keaktifan_organisasi', optional($mahasiswa->dataTambahan)->keaktifan_organisasi) == '0' ? 'selected' : '' }}>Tidak Aktif</option>
                                </select>
                                <x-input-error class="mt-2" :messages="$errors->get('keaktifan_organisasi')" />
                            </div>

                            <div>
                                <x-input-label for="layanan_akademik" value="Layanan Akademik (Skala 1-5)" />
                                <p class="text-xs text-gray-500 mb-2">1 = Sangat Kurang, 3 = Cukup, 5 = Sangat Memuaskan</p>
                                <select id="layanan_akademik" name="layanan_akademik" class="mt-1 block w-full border-gray-300 focus:border-primary-500 focus:ring-primary-500 rounded-xl shadow-sm" required>
                                    <option value="">-- Pilih Skala --</option>
                                    @for($i=1; $i<=5; $i++)
                                        <option value="{{ $i }}" {{ old('layanan_akademik', optional($mahasiswa->dataTambahan)->layanan_akademik) == $i ? 'selected' : '' }}>Skala {{ $i }}</option>
                                    @endfor
                                </select>
                                <x-input-error class="mt-2" :messages="$errors->get('layanan_akademik')" />
                            </div>

                            <div>
                                <x-input-label for="asal_sekolah" value="Kategori Asal Sekolah" />
                                <select id="asal_sekolah" name="asal_sekolah" class="mt-1 block w-full border-gray-300 focus:border-primary-500 focus:ring-primary-500 rounded-xl shadow-sm" required>
                                    <option value="">-- Pilih Asal Sekolah --</option>
                                    <option value="SMA" {{ old('asal_sekolah', optional($mahasiswa->dataTambahan)->asal_sekolah) == 'SMA' ? 'selected' : '' }}>SMA</option>
                                    <option value="SMK" {{ old('asal_sekolah', optional($mahasiswa->dataTambahan)->asal_sekolah) == 'SMK' ? 'selected' : '' }}>SMK</option>
                                    <option value="MA" {{ old('asal_sekolah', optional($mahasiswa->dataTambahan)->asal_sekolah) == 'MA' ? 'selected' : '' }}>MA</option>
                                    <option value="Lainnya" {{ old('asal_sekolah', optional($mahasiswa->dataTambahan)->asal_sekolah) == 'Lainnya' ? 'selected' : '' }}>Lainnya</option>
                                </select>
                                <x-input-error class="mt-2" :messages="$errors->get('asal_sekolah')" />
                            </div>
                        </div>
                    </div>

                    <div class="flex items-center justify-end pt-4 border-t border-slate-100">
                        <a href="{{ route('mahasiswa.index') }}" class="inline-flex items-center px-4 py-2 bg-white border border-slate-300 rounded-xl font-semibold text-xs text-slate-700 uppercase tracking-widest shadow-sm hover:bg-slate-50 mr-3">
                            Batal
                        </a>
                        <x-primary-button>
                            {{ __('Simpan Perubahan') }}
                        </x-primary-button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</x-app-layout>
