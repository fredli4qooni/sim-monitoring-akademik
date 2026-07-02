@props(['data' => null])

@php
    $ip_terakhir = old('ip_terakhir', $data->ip_terakhir ?? '');
    $kondisi_ekonomi = old('kondisi_ekonomi', $data->kondisi_ekonomi ?? '');
    $lingkungan_sosial = old('lingkungan_sosial', $data->lingkungan_sosial ?? '');
    $lingkungan_pertemanan = old('lingkungan_pertemanan', $data->lingkungan_pertemanan ?? '');
    $keaktifan_organisasi = old('keaktifan_organisasi', $data->keaktifan_organisasi ?? '');
    $pengaruh_organisasi = old('pengaruh_organisasi', $data->pengaruh_organisasi ?? '');
    $layanan_akademik = old('layanan_akademik', $data->layanan_akademik ?? '');
    $asal_sekolah = old('asal_sekolah', $data->asal_sekolah ?? '');
@endphp

<div>
    <!-- Progress Indicator -->
    <div class="mb-6">
        <div class="flex items-center justify-between text-sm font-medium text-slate-500 mb-2">
            <span x-text="step === 1 ? 'Sesi 1: Latar Belakang & Ekonomi' : 'Sesi 2: Organisasi & Akademik'"></span>
            <span>Langkah <span x-text="step"></span> dari 2</span>
        </div>
        <div class="w-full bg-slate-200 rounded-full h-2">
            <div class="bg-primary-500 h-2 rounded-full transition-all duration-300" :style="step === 1 ? 'width: 50%' : 'width: 100%'"></div>
        </div>
    </div>

    <!-- Step 1 -->
    <div x-show="step === 1" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform translate-x-4" x-transition:enter-end="opacity-100 transform translate-x-0">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <!-- IP Terakhir -->
            <div class="bg-slate-50 p-6 rounded-2xl border border-slate-100">
                <label class="block text-base font-bold text-slate-800 mb-4">Berapa IP terakhir yang Anda peroleh hingga semester saat ini? <span class="text-red-500">*</span></label>
                <div class="space-y-3">
                    @foreach(['< 3,00', '3,00 - 3,25', '3,26 - 3,50', '3,51 - 4,00'] as $opt)
                    <label class="flex items-center gap-3 cursor-pointer group">
                        <input type="radio" name="ip_terakhir" value="{{ $opt }}" {{ $ip_terakhir == $opt ? 'checked' : '' }} required class="w-5 h-5 text-primary-600 border-gray-300 focus:ring-primary-500 step1-radio">
                        <span class="text-slate-700 group-hover:text-slate-900">{{ $opt }}</span>
                    </label>
                    @endforeach
                </div>
                <x-input-error class="mt-2" :messages="$errors->get('ip_terakhir')" />
            </div>

            <!-- Kondisi Ekonomi -->
            <div class="bg-slate-50 p-6 rounded-2xl border border-slate-100">
                <label class="block text-base font-bold text-slate-800 mb-4">Berapakah kisaran pendapatan orang tua/wali per bulan? <span class="text-red-500">*</span></label>
                <div class="space-y-3">
                    @foreach(['< Rp2.000.000', 'Rp2.000.000 - Rp4.000.000', 'Rp4.000.000 - Rp6.000.000', '≥ Rp6.000.000'] as $opt)
                    <label class="flex items-center gap-3 cursor-pointer group">
                        <input type="radio" name="kondisi_ekonomi" value="{{ $opt }}" {{ $kondisi_ekonomi == $opt ? 'checked' : '' }} required class="w-5 h-5 text-primary-600 border-gray-300 focus:ring-primary-500 step1-radio">
                        <span class="text-slate-700 group-hover:text-slate-900">{{ $opt }}</span>
                    </label>
                    @endforeach
                </div>
                <x-input-error class="mt-2" :messages="$errors->get('kondisi_ekonomi')" />
            </div>

            <!-- Dukungan Keluarga -->
            <div class="bg-slate-50 p-6 rounded-2xl border border-slate-100">
                <label class="block text-base font-bold text-slate-800 mb-4">Bagaimana dukungan keluarga terhadap kelancaran studi Anda? <span class="text-red-500">*</span></label>
                <div class="space-y-3">
                    @foreach(['Sangat Mendukung', 'Mendukung', 'Cukup Mendukung', 'Kurang Mendukung', 'Tidak Mendukung'] as $opt)
                    <label class="flex items-center gap-3 cursor-pointer group">
                        <input type="radio" name="lingkungan_sosial" value="{{ $opt }}" {{ $lingkungan_sosial == $opt ? 'checked' : '' }} required class="w-5 h-5 text-primary-600 border-gray-300 focus:ring-primary-500 step1-radio">
                        <span class="text-slate-700 group-hover:text-slate-900">{{ $opt }}</span>
                    </label>
                    @endforeach
                </div>
                <x-input-error class="mt-2" :messages="$errors->get('lingkungan_sosial')" />
            </div>

            <!-- Lingkungan Pertemanan -->
            <div class="bg-slate-50 p-6 rounded-2xl border border-slate-100">
                <label class="block text-base font-bold text-slate-800 mb-4">Bagaimana pengaruh lingkungan pertemanan terhadap studi Anda? <span class="text-red-500">*</span></label>
                <div class="space-y-3">
                    @foreach(['Sangat Mendukung', 'Mendukung', 'Cukup Mendukung', 'Kurang Mendukung', 'Tidak Mendukung'] as $opt)
                    <label class="flex items-center gap-3 cursor-pointer group">
                        <input type="radio" name="lingkungan_pertemanan" value="{{ $opt }}" {{ $lingkungan_pertemanan == $opt ? 'checked' : '' }} required class="w-5 h-5 text-primary-600 border-gray-300 focus:ring-primary-500 step1-radio">
                        <span class="text-slate-700 group-hover:text-slate-900">{{ $opt }}</span>
                    </label>
                    @endforeach
                </div>
                <x-input-error class="mt-2" :messages="$errors->get('lingkungan_pertemanan')" />
            </div>
        </div>

        <div class="flex justify-end pt-6 mt-6 border-t border-slate-100">
            <button type="button" @click="
                let v1 = document.querySelector('input[name=ip_terakhir]:checked');
                let v2 = document.querySelector('input[name=kondisi_ekonomi]:checked');
                let v3 = document.querySelector('input[name=lingkungan_sosial]:checked');
                let v4 = document.querySelector('input[name=lingkungan_pertemanan]:checked');
                if(v1 && v2 && v3 && v4) { step = 2; } else { alert('Harap isi semua 4 pertanyaan di Sesi 1 sebelum melanjutkan.'); }
            " class="inline-flex items-center px-5 py-2.5 bg-primary-600 hover:bg-primary-500 text-white font-semibold rounded-xl text-sm transition-all shadow-sm">
                Selanjutnya
                <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
            </button>
        </div>
    </div>

    <!-- Step 2 -->
    <div x-show="step === 2" style="display: none;" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform translate-x-4" x-transition:enter-end="opacity-100 transform translate-x-0">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <!-- Keaktifan Organisasi -->
            <div class="bg-slate-50 p-6 rounded-2xl border border-slate-100">
                <label class="block text-base font-bold text-slate-800 mb-4">Apakah Anda aktif mengikuti organisasi selama masa perkuliahan? <span class="text-red-500">*</span></label>
                <div class="space-y-3">
                    @foreach(['Aktif', 'Kurang Aktif', 'Tidak Aktif'] as $opt)
                    <label class="flex items-center gap-3 cursor-pointer group">
                        <input type="radio" name="keaktifan_organisasi" value="{{ $opt }}" {{ $keaktifan_organisasi == $opt ? 'checked' : '' }} required class="w-5 h-5 text-primary-600 border-gray-300 focus:ring-primary-500">
                        <span class="text-slate-700 group-hover:text-slate-900">{{ $opt }}</span>
                    </label>
                    @endforeach
                </div>
                <x-input-error class="mt-2" :messages="$errors->get('keaktifan_organisasi')" />
            </div>

            <!-- Pengaruh Organisasi -->
            <div class="bg-slate-50 p-6 rounded-2xl border border-slate-100">
                <label class="block text-base font-bold text-slate-800 mb-4">Menurut Anda, kegiatan organisasi memengaruhi kelancaran studi? <span class="text-red-500">*</span></label>
                <div class="space-y-3">
                    @foreach(['Sangat Berpengaruh', 'Berpengaruh', 'Cukup Berpengaruh', 'Kurang Berpengaruh', 'Tidak Berpengaruh'] as $opt)
                    <label class="flex items-center gap-3 cursor-pointer group">
                        <input type="radio" name="pengaruh_organisasi" value="{{ $opt }}" {{ $pengaruh_organisasi == $opt ? 'checked' : '' }} required class="w-5 h-5 text-primary-600 border-gray-300 focus:ring-primary-500">
                        <span class="text-slate-700 group-hover:text-slate-900">{{ $opt }}</span>
                    </label>
                    @endforeach
                </div>
                <x-input-error class="mt-2" :messages="$errors->get('pengaruh_organisasi')" />
            </div>

            <!-- Layanan Akademik -->
            <div class="bg-slate-50 p-6 rounded-2xl border border-slate-100">
                <label class="block text-base font-bold text-slate-800 mb-4">Menurut Anda, layanan akademik mendukung kelancaran studi? <span class="text-red-500">*</span></label>
                <div class="space-y-3">
                    @foreach(['Sangat Berpengaruh', 'Berpengaruh', 'Cukup Berpengaruh', 'Kurang Berpengaruh', 'Tidak Berpengaruh'] as $opt)
                    <label class="flex items-center gap-3 cursor-pointer group">
                        <input type="radio" name="layanan_akademik" value="{{ $opt }}" {{ $layanan_akademik == $opt ? 'checked' : '' }} required class="w-5 h-5 text-primary-600 border-gray-300 focus:ring-primary-500">
                        <span class="text-slate-700 group-hover:text-slate-900">{{ $opt }}</span>
                    </label>
                    @endforeach
                </div>
                <x-input-error class="mt-2" :messages="$errors->get('layanan_akademik')" />
            </div>

            <!-- Asal Sekolah -->
            <div class="bg-slate-50 p-6 rounded-2xl border border-slate-100">
                <label class="block text-base font-bold text-slate-800 mb-4">Apa asal sekolah Anda sebelum masuk Program Studi SI? <span class="text-red-500">*</span></label>
                <div class="space-y-3">
                    @foreach(['SMA', 'SMK', 'MA', 'Lainnya'] as $opt)
                    <label class="flex items-center gap-3 cursor-pointer group">
                        <input type="radio" name="asal_sekolah" value="{{ $opt }}" {{ $asal_sekolah == $opt ? 'checked' : '' }} required class="w-5 h-5 text-primary-600 border-gray-300 focus:ring-primary-500">
                        <span class="text-slate-700 group-hover:text-slate-900">{{ $opt }}</span>
                    </label>
                    @endforeach
                </div>
                <x-input-error class="mt-2" :messages="$errors->get('asal_sekolah')" />
            </div>
        </div>
        
        <div class="flex justify-start pt-6 mt-6 border-t border-slate-100">
            <button type="button" @click="step = 1" class="inline-flex items-center px-5 py-2.5 bg-white border border-slate-200 text-slate-700 hover:bg-slate-50 font-semibold rounded-xl text-sm transition-all shadow-sm">
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                Kembali ke Sesi 1
            </button>
        </div>
    </div>
</div>
