<x-app-layout>
    <x-slot name="header">
        <h2 class="font-heading font-semibold text-xl text-slate-800 dark:text-slate-200 leading-tight">
            {{ __('Edit Data Latih: ') }} {{ $mahasiswa->nama }}
        </h2>
    </x-slot>

    <div class="py-8 bg-slate-50 min-h-screen">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl shadow-slate-200/50 rounded-3xl border border-slate-100/60 p-8 relative">
                <!-- Decorative background elements -->
                <div class="absolute top-0 right-0 -mt-4 -mr-4 w-24 h-24 bg-primary-400/10 rounded-full blur-2xl"></div>
                
                <div class="mb-8 relative z-10">
                    <h2 class="text-2xl font-bold text-primary-600">Ubah Data Latih</h2>
                    <p class="text-slate-500 mt-1 text-sm">Perbarui informasi mahasiswa historis untuk melatih model C4.5.</p>
                </div>
                
                <form method="POST" action="{{ route('data-latih.update', $mahasiswa->id) }}" class="grid grid-cols-1 lg:grid-cols-12 gap-8">
                    @csrf
                    @method('PUT')

                    <!-- Kolom Kiri: Data Diri -->
                    <div class="lg:col-span-4 space-y-6">
                        <div class="mb-4">
                            <h3 class="font-heading font-semibold text-lg text-slate-800 border-b border-slate-100 pb-2">Data Mahasiswa</h3>
                        </div>

                        <div>
                            <x-input-label for="nim" :value="__('NPM')" />
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

                        <div>
                            <x-input-label for="semester_lulus" :value="__('Semester Lulus')" />
                            <x-text-input id="semester_lulus" class="block mt-1 w-full" type="number" name="semester_lulus" :value="old('semester_lulus', $mahasiswa->semester_lulus)" min="1" max="14" required />
                            <x-input-error :messages="$errors->get('semester_lulus')" class="mt-2" />
                        </div>

                        <div class="hidden">
                            <x-input-label for="status_aktif" :value="__('Status Mahasiswa')" />
                            <select id="status_aktif" name="status_aktif" class="block mt-1 w-full border-gray-300 focus:border-primary-500 focus:ring-primary-500 rounded-xl shadow-sm" required>
                                <option value="Lulus" selected>Lulus</option>
                            </select>
                            <x-input-error :messages="$errors->get('status_aktif')" class="mt-2" />
                        </div>
                    </div>

                    <!-- Kolom Kanan: Parameter Kuesioner Akademik -->
                    <div class="lg:col-span-8" x-data="{ step: 1 }">
                        <div class="mb-4">
                            <h3 class="font-heading font-semibold text-lg text-slate-800 border-b border-slate-100 pb-2">Parameter Kuesioner Akademik</h3>
                        </div>
                        
                        <div class="mt-6">
                            <x-kuesioner-form :data="$mahasiswa->dataTambahan" />
                        </div>

                        <div x-show="step === 2" class="flex items-center justify-end pt-6 border-t border-slate-100 gap-3 mt-8" style="display: none;">
                            <a href="{{ route('data-latih.index') }}" class="inline-flex items-center px-5 py-2.5 bg-white border border-slate-200 rounded-xl font-semibold text-sm text-slate-600 hover:text-slate-800 hover:bg-slate-50 hover:border-slate-300 transition-all shadow-sm">
                                Batal
                            </a>
                            <button type="submit" class="inline-flex items-center px-6 py-2.5 bg-primary-600 hover:bg-primary-500 text-white font-semibold rounded-xl text-sm transition-all shadow-sm transform hover:-translate-y-0.5">
                                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                Simpan Perubahan
                            </button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</x-app-layout>
