<x-guest-layout>
    <div class="min-h-screen flex flex-col bg-slate-50 relative overflow-x-hidden">
        
        <!-- Header / Navbar -->
        <header class="w-full relative z-20 py-4 px-4 sm:px-6 lg:px-8 border-b border-slate-200/50 bg-white/70 backdrop-blur-md">
            <div class="max-w-7xl mx-auto flex justify-between items-center">
                <div class="flex items-center gap-3">
                    @php
                        $appLogo = \App\Models\Setting::where('key', 'app_logo')->value('value');
                        $appName = \App\Models\Setting::where('key', 'app_name')->value('value') ?? 'SPK UIN RIL';
                    @endphp
                    @if($appLogo)
                        <img src="{{ asset('storage/' . $appLogo) }}" alt="Logo" class="w-8 h-8 object-contain">
                    @else
                        <div class="inline-flex items-center justify-center w-10 h-10 rounded-xl bg-gradient-to-br from-primary-500 to-primary-700 text-white shadow-md">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 14l9-5-9-5-9 5 9 5z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
                            </svg>
                        </div>
                    @endif
                    <span class="text-xl font-heading font-extrabold text-slate-900 tracking-tight">{{ $appName }}</span>
                </div>
                <div class="flex gap-2">
                    @if(isset($mahasiswa) && auth()->user()->role !== 'mahasiswa')
                    <a href="{{ route('cek-prediksi') }}" class="inline-flex items-center justify-center px-4 py-2 text-sm font-semibold text-slate-600 bg-slate-100 rounded-xl hover:bg-slate-200 transition-colors">
                        Pencarian Baru
                    </a>
                    @endif
                    @if(auth()->user()->role !== 'mahasiswa')
                    <a href="{{ route('dashboard') }}" class="inline-flex items-center justify-center px-5 py-2 text-sm font-semibold text-white bg-slate-800 rounded-xl hover:bg-slate-700 transition-colors shadow-sm">
                        Ke Dashboard
                    </a>
                    @else
                    <form method="POST" action="{{ route('logout') }}" class="inline">
                        @csrf
                        <button type="submit" class="inline-flex items-center justify-center px-5 py-2 text-sm font-semibold text-white bg-red-600 rounded-xl hover:bg-red-700 transition-colors shadow-sm">
                            Keluar
                        </button>
                    </form>
                    @endif
                </div>
            </div>
        </header>

        <!-- Dekorasi Background -->
        <div class="absolute inset-0 pointer-events-none overflow-hidden z-0">
            <div class="absolute -top-1/4 -right-1/4 w-[1000px] h-[1000px] rounded-full bg-primary-100/50 blur-[100px] opacity-60"></div>
            <div class="absolute -bottom-1/4 -left-1/4 w-[800px] h-[800px] rounded-full bg-primary-200/30 blur-[100px] opacity-60"></div>
        </div>

        <main class="flex-1 flex flex-col justify-center items-center py-10 px-4 relative z-10 w-full">
            
            @if(session('error'))
                <div class="max-w-2xl w-full mb-6 p-4 rounded-xl bg-red-50 border border-red-100 text-red-600 text-sm flex items-start gap-3 shadow-sm mx-auto animate-in fade-in slide-in-from-top-4">
                    <svg class="w-5 h-5 shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path></svg>
                    <span>{{ session('error') }}</span>
                </div>
            @endif

            @if(!isset($mahasiswa))
                <!-- STATE 1: LANDING PAGE -->
                <div class="text-center max-w-2xl mx-auto mb-10">
                    <h1 class="text-4xl md:text-5xl font-heading font-black text-slate-900 tracking-tight mb-4">
                        Dasbor Prediksi Mahasiswa
                    </h1>
                    <p class="text-lg text-slate-600">
                        Pantau performa akademik dan prediksi kelulusan Anda secara real-time yang dianalisis menggunakan kecerdasan buatan <span class="font-semibold text-primary-600">C4.5</span>.
                    </p>
                </div>

                <div class="w-full sm:max-w-md bg-white/80 backdrop-blur-xl shadow-2xl overflow-hidden sm:rounded-3xl border border-white mx-auto">
                    <div class="px-8 py-10">
                        <form method="POST" action="{{ route('cek-prediksi.check') }}" class="space-y-6">
                            @csrf
                            <div>
                                <label for="nim" class="block text-sm font-semibold text-slate-700 mb-2">Nomor Pokok Mahasiswa (NPM)</label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                        <svg class="h-5 w-5 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 21h7a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v11m0 5l4.879-4.879m0 0a3 3 0 104.243-4.242 3 3 0 00-4.243 4.242z"></path></svg>
                                    </div>
                                    <input type="text" name="nim" id="nim" value="{{ old('nim') }}" required autofocus class="pl-11 w-full rounded-xl border-slate-200 shadow-sm focus:border-primary-500 focus:ring-primary-500 py-3 text-slate-800 font-medium placeholder:text-slate-400 placeholder:font-normal" placeholder="Masukkan NPM Anda...">
                                </div>
                            </div>

                            <button type="submit" class="w-full flex items-center justify-center py-3.5 px-4 border border-transparent rounded-xl shadow-lg shadow-primary-500/30 text-sm font-bold text-white bg-gradient-to-r from-primary-600 to-primary-700 hover:from-primary-500 hover:to-primary-600 transition-all transform hover:-translate-y-0.5">
                                Akses Dasbor Akademik
                            </button>
                        </form>
                    </div>
                </div>
                
                <div class="mt-12 text-center text-xs text-slate-400">
                    &copy; {{ date('Y') }} {{ \App\Models\Setting::where('key', 'app_name')->value('value') ?? 'SPK Universitas Islam Negeri Raden Intan Lampung' }}
                </div>
            @else
                <!-- STATE 2: FULL DASHBOARD -->
                @php
                    $prediksi = $mahasiswa->prediksiKelulusan;
                    $dataTambahan = $mahasiswa->dataTambahan;
                    
                    $isTepatWaktu = $prediksi && $prediksi->status_risiko == 'Rendah';
                    $isBerisiko = $prediksi && $prediksi->status_risiko == 'Tinggi';
                @endphp

                <div class="w-full max-w-6xl mx-auto animate-in fade-in slide-in-from-bottom-8 duration-700">
                    
                    <!-- Sapaan -->
                    <div class="mb-8">
                        <h2 class="text-3xl font-heading font-black text-slate-800">Halo, {{ explode(' ', trim($mahasiswa->nama))[0] }}! 👋</h2>
                        <p class="text-slate-500 mt-1">Berikut adalah rekapitulasi data dan analisis prediksi akademik Anda.</p>
                    </div>

                    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                        
                        <!-- KOLOM KIRI (Hasil Prediksi & Rekomendasi) -->
                        <div class="lg:col-span-1 space-y-6">
                            
                            <!-- Kartu Status Utama -->
                            <div class="rounded-3xl p-8 relative overflow-hidden shadow-xl {{ $isTepatWaktu ? 'bg-gradient-to-br from-emerald-500 to-teal-700' : ($isBerisiko ? 'bg-gradient-to-br from-rose-500 to-red-700' : 'bg-slate-700') }}">
                                <div class="absolute -right-10 -top-10 w-40 h-40 bg-white opacity-10 rounded-full blur-2xl"></div>
                                <div class="absolute -left-10 -bottom-10 w-40 h-40 bg-black opacity-10 rounded-full blur-2xl"></div>
                                
                                <div class="relative z-10 text-white">
                                    <p class="text-white/80 text-xs font-bold uppercase tracking-widest mb-1">Keputusan Model C4.5</p>
                                    <h3 class="text-3xl font-black mb-6 leading-tight">
                                        @if($prediksi && $prediksi->prediksi_sistem)
                                            {{ $prediksi->prediksi_sistem }}
                                        @else
                                            Belum Ada Prediksi
                                        @endif
                                    </h3>
                                    
                                    <div class="bg-black/20 backdrop-blur-sm rounded-2xl p-4 border border-white/10">
                                        <p class="text-sm text-white/90 font-medium">
                                            @if($isTepatWaktu)
                                                Luar biasa! Tren performa Anda mengarah pada kelulusan di bawah 8 semester.
                                            @elseif($isBerisiko)
                                                Perhatian: Anda terdeteksi berisiko lulus melampaui 8 semester. Segera perbaiki performa Anda.
                                            @else
                                                Data Anda belum dikalkulasi oleh sistem AI kampus.
                                            @endif
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- Kartu Rekomendasi (Actionable Insights) -->
                            <div class="bg-white rounded-3xl p-6 shadow-saas border border-slate-100">
                                <h4 class="font-bold text-slate-800 mb-4 flex items-center gap-2">
                                    <svg class="w-5 h-5 text-primary-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                                    Saran Akademik
                                </h4>
                                <ul class="space-y-3 text-sm text-slate-600">
                                    @if($isTepatWaktu)
                                        <li class="flex items-start gap-2">
                                            <div class="mt-0.5 text-green-500"><svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg></div>
                                            <span>Pertahankan konsistensi nilai IPK Anda saat ini.</span>
                                        </li>
                                        @if(optional($dataTambahan)->keaktifan_organisasi == 'Aktif')
                                        <li class="flex items-start gap-2">
                                            <div class="mt-0.5 text-green-500"><svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg></div>
                                            <span>Keaktifan organisasi Anda terbukti tidak mengganggu akademik. Lanjutkan!</span>
                                        </li>
                                        @endif
                                    @elseif($isBerisiko)
                                        @if(optional($dataTambahan)->ip_terakhir < 3.0)
                                        <li class="flex items-start gap-2">
                                            <div class="mt-0.5 text-red-500"><svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm-1-9a1 1 0 112 0v4a1 1 0 11-2 0V9zm1 6a1 1 0 100 2 1 1 0 000-2z" clip-rule="evenodd"></path></svg></div>
                                            <span class="font-medium text-red-700">Tingkatkan fokus belajar Anda! IPK saat ini berada di bawah batas optimal.</span>
                                        </li>
                                        @endif
                                        @if(optional($dataTambahan)->keaktifan_organisasi == 'Aktif')
                                        <li class="flex items-start gap-2">
                                            <div class="mt-0.5 text-orange-500"><svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm-1-9a1 1 0 112 0v4a1 1 0 11-2 0V9zm1 6a1 1 0 100 2 1 1 0 000-2z" clip-rule="evenodd"></path></svg></div>
                                            <span>Sistem mendeteksi Anda aktif organisasi. Pastikan hal ini tidak mengganggu waktu pengerjaan tugas akhir.</span>
                                        </li>
                                        @endif
                                        <li class="flex items-start gap-2">
                                            <div class="mt-0.5 text-blue-500"><svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg></div>
                                            <span>Segera konsultasikan kondisi Anda ke Dosen Pembimbing Akademik (DPA).</span>
                                        </li>
                                    @else
                                        <li class="text-slate-400 italic">Saran belum tersedia.</li>
                                    @endif
                                </ul>
                            </div>

                        </div>

                        <!-- KOLOM KANAN (Profil & Parameter AI) -->
                        <div class="lg:col-span-2 space-y-6">
                            
                            <!-- Identitas Mahasiswa -->
                            <div class="bg-white rounded-3xl p-6 md:p-8 shadow-saas border border-slate-100 flex flex-col sm:flex-row items-center gap-6">
                                <div class="w-20 h-20 rounded-2xl bg-primary-50 border-2 border-primary-100 flex items-center justify-center text-primary-600 font-bold text-3xl shrink-0">
                                    {{ substr($mahasiswa->nama, 0, 1) }}
                                </div>
                                <div class="flex-1 text-center sm:text-left">
                                    <h3 class="text-xl font-bold text-slate-800">{{ $mahasiswa->nama }}</h3>
                                    <div class="flex flex-wrap justify-center sm:justify-start gap-3 mt-3">
                                        <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-slate-100 text-slate-600">NPM: {{ $mahasiswa->nim }}</span>
                                        <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-slate-100 text-slate-600">Angkatan: {{ $mahasiswa->angkatan }}</span>
                                        <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium {{ $mahasiswa->status_aktif == 'Aktif' ? 'bg-green-100 text-green-700' : 'bg-red-100 text-red-700' }}">Status: {{ $mahasiswa->status_aktif }}</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Grid Parameter AI -->
                            <div class="bg-white rounded-3xl p-6 md:p-8 shadow-saas border border-slate-100">
                                <h4 class="font-bold text-slate-800 mb-6 flex items-center gap-2">
                                    <svg class="w-5 h-5 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path></svg>
                                    Parameter Analisis Sistem
                                </h4>
                                
                                @if($dataTambahan)
                                <div class="grid grid-cols-2 sm:grid-cols-3 gap-4">
                                    
                                    <!-- IPK -->
                                    <div class="p-4 rounded-2xl bg-slate-50 border border-slate-100 hover:border-primary-200 transition-colors">
                                        <p class="text-xs text-slate-500 font-semibold uppercase mb-2">IPK Terakhir</p>
                                        <span class="inline-flex px-2 py-1 rounded-lg text-xs font-bold bg-primary-50 text-primary-700">{{ $dataTambahan->ip_terakhir }}</span>
                                    </div>
                                    
                                    <!-- Organisasi -->
                                    <div class="p-4 rounded-2xl bg-slate-50 border border-slate-100 hover:border-primary-200 transition-colors">
                                        <p class="text-xs text-slate-500 font-semibold uppercase mb-2">Organisasi</p>
                                        <span class="inline-flex px-2 py-1 rounded-lg text-xs font-bold bg-primary-50 text-primary-700">{{ $dataTambahan->keaktifan_organisasi }}</span>
                                    </div>

                                    <!-- Pengaruh Organisasi -->
                                    <div class="p-4 rounded-2xl bg-slate-50 border border-slate-100 hover:border-primary-200 transition-colors">
                                        <p class="text-xs text-slate-500 font-semibold uppercase mb-2">Pengaruh Org.</p>
                                        <span class="inline-flex px-2 py-1 rounded-lg text-xs font-bold bg-primary-50 text-primary-700">{{ $dataTambahan->pengaruh_organisasi }}</span>
                                    </div>

                                    <!-- Asal Sekolah -->
                                    <div class="p-4 rounded-2xl bg-slate-50 border border-slate-100 hover:border-primary-200 transition-colors">
                                        <p class="text-xs text-slate-500 font-semibold uppercase mb-2">Asal Sekolah</p>
                                        <span class="inline-flex px-2 py-1 rounded-lg text-xs font-bold bg-primary-50 text-primary-700">{{ $dataTambahan->asal_sekolah }}</span>
                                    </div>

                                    <!-- Kondisi Ekonomi -->
                                    <div class="p-4 rounded-2xl bg-slate-50 border border-slate-100 hover:border-primary-200 transition-colors">
                                        <p class="text-xs text-slate-500 font-semibold uppercase mb-2">Ekonomi</p>
                                        <span class="inline-flex px-2 py-1 rounded-lg text-xs font-bold bg-primary-50 text-primary-700">{{ $dataTambahan->kondisi_ekonomi }}</span>
                                    </div>

                                    <!-- Dukungan Keluarga -->
                                    <div class="p-4 rounded-2xl bg-slate-50 border border-slate-100 hover:border-primary-200 transition-colors">
                                        <p class="text-xs text-slate-500 font-semibold uppercase mb-2">Keluarga</p>
                                        <span class="inline-flex px-2 py-1 rounded-lg text-xs font-bold bg-primary-50 text-primary-700">{{ $dataTambahan->lingkungan_sosial }}</span>
                                    </div>

                                    <!-- Lingkungan Pertemanan -->
                                    <div class="p-4 rounded-2xl bg-slate-50 border border-slate-100 hover:border-primary-200 transition-colors">
                                        <p class="text-xs text-slate-500 font-semibold uppercase mb-2">Pertemanan</p>
                                        <span class="inline-flex px-2 py-1 rounded-lg text-xs font-bold bg-primary-50 text-primary-700">{{ $dataTambahan->lingkungan_pertemanan }}</span>
                                    </div>

                                    <!-- Layanan Akademik -->
                                    <div class="p-4 rounded-2xl bg-slate-50 border border-slate-100 hover:border-primary-200 transition-colors">
                                        <p class="text-xs text-slate-500 font-semibold uppercase mb-2">Layanan Akademik</p>
                                        <span class="inline-flex px-2 py-1 rounded-lg text-xs font-bold bg-primary-50 text-primary-700">{{ $dataTambahan->layanan_akademik }}</span>
                                    </div>

                                </div>
                                @else
                                <div class="text-center py-8 text-slate-500 bg-slate-50 rounded-2xl border border-dashed border-slate-200">
                                    Data parameter belum dilengkapi oleh akademik.
                                </div>
                                @endif
                                
                            </div>
                        </div>

                    </div>
                </div>
            @endif
        </main>
    </div>
</x-guest-layout>
