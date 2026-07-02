<x-app-layout>
    <x-slot name="header">
        <h2 class="font-heading font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Monitoring Prediksi Kelulusan') }}
        </h2>
    </x-slot>

    <!-- Information Box -->
    <div class="mb-6 p-4 bg-primary-50 dark:bg-primary-900/20 rounded-2xl border border-primary-100 dark:border-primary-900/50 flex items-start gap-4">
        <div class="mt-0.5 p-2 bg-primary-100 dark:bg-primary-800 rounded-xl text-primary-600 dark:text-primary-300 shrink-0">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
        </div>
        <div>
            <h4 class="text-sm font-semibold text-primary-900 dark:text-primary-100 mb-1">Pedoman Kategori Prediksi</h4>
            <p class="text-sm text-primary-800 dark:text-primary-300 leading-relaxed">
                Tabel ini menampilkan hasil prediksi massal otomatis dari Model C4.5. Mahasiswa dikategorikan <strong>Tepat Waktu</strong> jika diprediksi lulus maksimal pada semester 8. Sebaliknya, mahasiswa dikategorikan <strong>Tidak Tepat Waktu (Berisiko Terlambat)</strong> jika diprediksi lulus pada semester 9 ke atas. Klik tombol <strong>Lihat Detail</strong> untuk membedah alasan keputusan (Rule) sistem.
            </p>
        </div>
    </div>

    <div class="bg-white shadow-saas rounded-3xl border border-slate-100/50 overflow-hidden">
        
        <!-- Toolbar & Filter -->
        <div class="p-6 border-b border-slate-100 bg-white flex flex-col md:flex-row md:items-end md:justify-between gap-4">
            <form method="GET" action="{{ route('monitoring.index') }}" class="flex flex-col md:flex-row flex-wrap gap-4 items-end flex-1">
                
                <!-- Search -->
                <div class="relative flex-1 w-full md:w-auto min-w-[200px]">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                    </div>
                    <input type="text" name="search" value="{{ request('search') }}" placeholder="Cari Nama atau NIM..." class="block w-full pl-10 pr-3 py-2.5 border border-gray-300 dark:border-gray-700 rounded-xl bg-white dark:bg-gray-900 text-gray-900 dark:text-gray-100 focus:ring-primary-500 focus:border-primary-500 sm:text-sm">
                </div>

                <!-- Filter Angkatan -->
                <div class="w-full md:w-48 shrink-0">
                    <select name="angkatan" class="block w-full py-2.5 px-3 border border-gray-300 dark:border-gray-700 rounded-xl bg-white dark:bg-gray-900 text-gray-900 dark:text-gray-100 focus:ring-primary-500 focus:border-primary-500 sm:text-sm">
                        <option value="">-- Semua Angkatan --</option>
                        @foreach($listAngkatan as $angk)
                            <option value="{{ $angk }}" {{ request('angkatan') == $angk ? 'selected' : '' }}>Angkatan {{ $angk }}</option>
                        @endforeach
                    </select>
                </div>

                <!-- Filter Status -->
                <div class="w-full md:w-56 shrink-0">
                    <select name="status" class="block w-full py-2.5 px-3 border border-gray-300 dark:border-gray-700 rounded-xl bg-white dark:bg-gray-900 text-gray-900 dark:text-gray-100 focus:ring-primary-500 focus:border-primary-500 sm:text-sm">
                        <option value="">-- Semua Status --</option>
                        <option value="Rendah" {{ request('status') == 'Rendah' ? 'selected' : '' }}>Tepat Waktu (Aman)</option>
                        <option value="Tinggi" {{ request('status') == 'Tinggi' ? 'selected' : '' }}>Terlambat (Berisiko)</option>
                    </select>
                </div>

                <!-- Actions -->
                <div class="flex flex-wrap gap-2 w-full md:w-auto shrink-0">
                    <button type="submit" class="px-4 py-2.5 bg-primary-600 hover:bg-primary-500 text-white rounded-xl shadow-md shadow-primary-600/20 transition-all font-medium">
                        Filter
                    </button>
                    @if(request()->anyFilled(['search', 'angkatan', 'status']))
                        <a href="{{ route('monitoring.index') }}" class="px-4 py-2.5 bg-slate-100 hover:bg-slate-200 text-slate-700 rounded-xl transition-colors flex items-center justify-center" title="Reset Filter">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                        </a>
                    @endif
                </div>
            </form>

            @if(auth()->user()->role === 'admin')
            <form action="{{ route('monitoring.run') }}" method="POST" class="w-full md:w-auto mt-4 md:mt-0" onsubmit="return confirm('Proses ini akan memprediksi seluruh mahasiswa aktif menggunakan model C4.5 terbaru. Lanjutkan?');">
                @csrf
                <button type="submit" class="px-5 py-2.5 bg-indigo-600 hover:bg-indigo-700 text-white font-medium rounded-xl shadow-md shadow-indigo-600/20 transition-all flex items-center justify-center gap-2 w-full md:w-auto">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path></svg>
                    Jalankan Prediksi
                </button>
            </form>
            @endif
        </div>

        <!-- Table -->
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                <thead class="bg-slate-50 border-b border-slate-100">
                    <tr>
                        <th class="px-6 py-4 text-left text-xs font-semibold text-slate-500 uppercase tracking-wider">Mahasiswa</th>
                        <th class="px-6 py-4 text-center text-xs font-semibold text-slate-500 uppercase tracking-wider">IPK Terakhir</th>
                        <th class="px-6 py-4 text-left text-xs font-semibold text-slate-500 uppercase tracking-wider">Hasil Prediksi (AI)</th>
                        <th class="px-6 py-4 text-right text-xs font-semibold text-slate-500 uppercase tracking-wider">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-100 bg-white">
                    @forelse ($mahasiswas as $mhs)
                        @php
                            $prediksi = $mhs->prediksiKelulusan;
                            $ipkAvg = optional($mhs->dataTambahan)->ip_terakhir;
                        @endphp
                        <tr class="hover:bg-gray-50 dark:hover:bg-gray-750 transition-colors">
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 h-10 w-10 rounded-full bg-primary-100 dark:bg-primary-900/50 flex items-center justify-center text-primary-700 dark:text-primary-400 font-bold">
                                        {{ substr($mhs->nama, 0, 1) }}
                                    </div>
                                    <div class="ml-4">
                                        <div class="text-sm font-semibold text-gray-900 dark:text-white">{{ $mhs->nama }}</div>
                                        <div class="text-xs text-gray-500 dark:text-gray-400">{{ $mhs->nim }} • Angkatan {{ $mhs->angkatan }}</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-center font-medium text-slate-700">
                                {{ $ipkAvg ?? '-' }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                @if($prediksi && $prediksi->prediksi_sistem)
                                    @if($prediksi->status_risiko == 'Rendah')
                                        <div class="flex items-center">
                                            <span class="flex h-3 w-3 relative">
                                              <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-green-400 opacity-75"></span>
                                              <span class="relative inline-flex rounded-full h-3 w-3 bg-green-500"></span>
                                            </span>
                                            <span class="ml-2 text-sm font-medium text-green-700 dark:text-green-400">Tepat Waktu</span>
                                        </div>
                                    @elseif($prediksi->status_risiko == 'Tinggi')
                                        <div class="flex items-center">
                                            <span class="flex h-3 w-3 relative">
                                              <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-red-400 opacity-75"></span>
                                              <span class="relative inline-flex rounded-full h-3 w-3 bg-red-500"></span>
                                            </span>
                                            <span class="ml-2 text-sm font-medium text-red-700 dark:text-red-400">Berisiko Terlambat</span>
                                        </div>
                                    @else
                                        <span class="text-sm text-gray-400 italic">Belum Diprediksi</span>
                                    @endif
                                @else
                                    <span class="text-sm text-gray-400 italic">Belum Diprediksi</span>
                                @endif
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                <a href="{{ route('monitoring.show', $mhs->id) }}" class="inline-flex items-center px-3 py-1.5 bg-indigo-50 text-indigo-700 hover:bg-indigo-100 rounded-lg transition-colors">
                                    <svg class="w-4 h-4 mr-1.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>
                                    Lihat Detail Analisis
                                </a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="px-6 py-12 text-center">
                                <svg class="mx-auto h-12 w-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                                <p class="mt-4 text-sm text-gray-500">Tidak ada mahasiswa yang sesuai kriteria.</p>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        @if($mahasiswas->hasPages())
            <div class="px-6 py-4 border-t border-gray-100 dark:border-gray-700 bg-gray-50 dark:bg-gray-800/50">
                {{ $mahasiswas->withQueryString()->links() }}
            </div>
        @endif
    </div>

    <!-- Toast Notification (Alpine.js) -->
    @if(session('success'))
        <div x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 3000)" class="fixed bottom-4 right-4 z-50">
            <div class="bg-gray-900 text-white px-6 py-3 rounded-xl shadow-lg flex items-center gap-3">
                <div class="bg-green-500/20 text-green-400 p-1.5 rounded-full">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                </div>
                <span class="text-sm font-medium">{{ session('success') }}</span>
            </div>
        </div>
    @endif

    @if($errors->any())
        <div x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 5000)" class="fixed bottom-4 right-4 z-50">
            <div class="bg-gray-900 text-white px-6 py-3 rounded-xl shadow-lg flex items-center gap-3">
                <div class="bg-red-500/20 text-red-400 p-1.5 rounded-full">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                </div>
                <span class="text-sm font-medium">{{ $errors->first() }}</span>
            </div>
        </div>
    @endif
</x-app-layout>
