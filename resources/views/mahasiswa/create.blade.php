<x-app-layout>
    <x-slot name="header">
        <h2 class="font-heading font-semibold text-xl text-slate-800 dark:text-slate-200 leading-tight">
            {{ __('Tambah Mahasiswa') }}
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-saas rounded-3xl border border-slate-100/50 p-8">
                
                <form method="POST" action="{{ route('mahasiswa.store') }}" class="space-y-6">
                    @csrf

                    <div>
                        <x-input-label for="nim" :value="__('NIM')" />
                        <x-text-input id="nim" class="block mt-1 w-full" type="text" name="nim" :value="old('nim')" required autofocus />
                        <x-input-error :messages="$errors->get('nim')" class="mt-2" />
                    </div>

                    <div>
                        <x-input-label for="nama" :value="__('Nama Lengkap')" />
                        <x-text-input id="nama" class="block mt-1 w-full" type="text" name="nama" :value="old('nama')" required />
                        <x-input-error :messages="$errors->get('nama')" class="mt-2" />
                    </div>

                    <div>
                        <x-input-label for="angkatan" :value="__('Tahun Angkatan')" />
                        <x-text-input id="angkatan" class="block mt-1 w-full" type="number" name="angkatan" :value="old('angkatan')" min="2000" max="{{ date('Y')+1 }}" required />
                        <x-input-error :messages="$errors->get('angkatan')" class="mt-2" />
                    </div>

                    <div>
                        <x-input-label for="status_aktif" :value="__('Status Mahasiswa')" />
                        <select id="status_aktif" name="status_aktif" class="block mt-1 w-full border-gray-300 focus:border-primary-500 focus:ring-primary-500 rounded-xl shadow-sm" required>
                            <option value="Aktif" {{ old('status_aktif') === 'Aktif' ? 'selected' : '' }}>Aktif</option>
                            <option value="Cuti" {{ old('status_aktif') === 'Cuti' ? 'selected' : '' }}>Cuti</option>
                            <option value="Lulus" {{ old('status_aktif') === 'Lulus' ? 'selected' : '' }}>Lulus</option>
                            <option value="Keluar" {{ old('status_aktif') === 'Keluar' ? 'selected' : '' }}>Keluar</option>
                        </select>
                        <x-input-error :messages="$errors->get('status_aktif')" class="mt-2" />
                    </div>

                    <div class="flex items-center justify-end pt-4 border-t border-slate-100">
                        <a href="{{ route('mahasiswa.index') }}" class="inline-flex items-center px-4 py-2 bg-white border border-slate-300 rounded-xl font-semibold text-xs text-slate-700 uppercase tracking-widest shadow-sm hover:bg-slate-50 mr-3">
                            Batal
                        </a>
                        <x-primary-button>
                            {{ __('Simpan Data') }}
                        </x-primary-button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</x-app-layout>
