<x-app-layout>
    <x-slot name="header">
        <h2 class="font-heading font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Monitoring Prediksi Kelulusan') }}
        </h2>
    </x-slot>

    <div class="bg-white shadow-saas rounded-3xl border border-slate-100/50 overflow-hidden">
        
        <!-- Toolbar & Filter -->
        <div class="p-6 border-b border-slate-100 bg-white">
            <form method="GET" action="{{ route('monitoring.index') }}" class="flex flex-col md:flex-row flex-wrap gap-4 items-center">
                
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
                    <button type="submit" class="px-4 py-2.5 bg-primary-600 hover:bg-primary-500 text-white rounded-xl shadow-md shadow-primary-600/20 transition-all">
                        Filter
                    </button>
                    @if(request()->anyFilled(['search', 'angkatan', 'status']))
                        <a href="{{ route('monitoring.index') }}" class="px-4 py-2.5 bg-slate-100 hover:bg-slate-200 text-slate-700 rounded-xl transition-colors flex items-center justify-center" title="Reset Filter">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                        </a>
                    @endif
                    
                    <a href="{{ route('report.pdf', request()->query()) }}" target="_blank" class="px-4 py-2.5 bg-red-600 hover:bg-red-500 text-white rounded-xl shadow-md shadow-red-600/20 transition-all flex items-center gap-2" title="Cetak Laporan PDF">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 17h2a2 2 0 002-2v-4a2 2 0 00-2-2H5a2 2 0 00-2 2v4a2 2 0 002 2h2m2 4h6a2 2 0 002-2v-4a2 2 0 00-2-2H9a2 2 0 00-2 2v4a2 2 0 002 2zm8-12V5a2 2 0 00-2-2H9a2 2 0 00-2 2v4h10z"></path></svg>
                        Cetak PDF
                    </a>
                </div>

            </form>
        </div>

        <!-- Table -->
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                <thead class="bg-slate-50 border-b border-slate-100">
                    <tr>
                        <th class="px-6 py-4 text-left text-xs font-semibold text-slate-500 uppercase tracking-wider">Mahasiswa</th>
                        <th class="px-6 py-4 text-center text-xs font-semibold text-slate-500 uppercase tracking-wider">IPK Terakhir</th>
                        <th class="px-6 py-4 text-left text-xs font-semibold text-slate-500 uppercase tracking-wider">Hasil Prediksi (AI)</th>
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
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-center font-medium {{ $ipkAvg >= 3.0 ? 'text-green-600 dark:text-green-400' : 'text-yellow-600 dark:text-yellow-400' }}">
                                {{ $ipkAvg ? number_format($ipkAvg, 2) : '-' }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                @if($prediksi)
                                    @if($prediksi->status_risiko == 'Rendah')
                                        <div class="flex items-center">
                                            <span class="flex h-3 w-3 relative">
                                              <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-green-400 opacity-75"></span>
                                              <span class="relative inline-flex rounded-full h-3 w-3 bg-green-500"></span>
                                            </span>
                                            <span class="ml-2 text-sm font-medium text-green-700 dark:text-green-400">Tepat Waktu</span>
                                        </div>
                                    @else
                                        <div class="flex items-center">
                                            <span class="flex h-3 w-3 relative">
                                              <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-red-400 opacity-75"></span>
                                              <span class="relative inline-flex rounded-full h-3 w-3 bg-red-500"></span>
                                            </span>
                                            <span class="ml-2 text-sm font-medium text-red-700 dark:text-red-400">Berisiko Terlambat</span>
                                        </div>
                                    @endif
                                @else
                                    <span class="text-sm text-gray-400 italic">Belum Diprediksi</span>
                                @endif
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="px-6 py-12 text-center">
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
</x-app-layout>
