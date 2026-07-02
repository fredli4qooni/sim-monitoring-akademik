<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-heading font-bold text-2xl text-primary-600 leading-tight">
                {{ __('Data Latih (Training Data)') }}
            </h2>
            <div class="hidden sm:flex items-center space-x-2 text-sm text-slate-500">
                <span>Model AI C4.5</span>
                <span class="w-1.5 h-1.5 rounded-full bg-green-500 animate-pulse"></span>
            </div>
        </div>
    </x-slot>

    <div class="bg-white dark:bg-gray-800 shadow-sm rounded-2xl border border-gray-100 dark:border-gray-700 overflow-hidden p-6">
        
        <!-- Toolbar -->
        <div class="flex flex-col lg:flex-row justify-between items-start lg:items-center gap-4 mb-6">
            <div class="shrink-0">
                <h3 class="text-lg font-bold text-slate-800 dark:text-slate-200">Kelola Data Historis</h3>
                <p class="text-slate-500 text-sm">Data ini akan digunakan model C4.5 untuk proses pelatihan.</p>
            </div>
            
            <div class="flex flex-wrap items-center gap-3 w-full lg:w-auto lg:justify-end">
                <a href="{{ route('data-latih.create') }}" class="inline-flex items-center justify-center px-4 py-2.5 bg-primary-600 hover:bg-primary-500 text-white text-sm font-medium rounded-xl transition-all shadow-sm transform hover:-translate-y-0.5 whitespace-nowrap">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path></svg>
                    Tambah Data
                </a>
                
                <button type="button" class="inline-flex items-center justify-center px-4 py-2.5 bg-white border border-slate-200 text-slate-700 hover:bg-slate-50 hover:text-primary-600 text-sm font-medium rounded-xl transition-all shadow-sm whitespace-nowrap">
                    <svg class="w-4 h-4 mr-2 text-slate-400 group-hover:text-primary-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12"></path></svg>
                    Import Excel
                </button>
                
                <!-- Tombol Latih Ulang Model C4.5 -->
                <form action="{{ route('ml.train') }}" method="POST" class="inline-block m-0" onsubmit="return confirm('Proses ini akan menghapus rules lama dan membangun pohon keputusan baru berdasarkan Data Latih terbaru. Lanjutkan?');">
                    @csrf
                    <button type="submit" class="inline-flex items-center justify-center px-4 py-2.5 bg-indigo-600 hover:bg-indigo-500 text-white text-sm font-medium rounded-xl transition-all shadow-sm transform hover:-translate-y-0.5 whitespace-nowrap focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path></svg>
                        Latih Ulang Model
                    </button>
                </form>

                <form method="GET" action="{{ route('data-latih.index') }}" class="relative group w-full sm:w-auto sm:min-w-[220px]">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <svg class="h-5 w-5 text-slate-400 group-focus-within:text-primary-500 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                    </div>
                    <input type="text" name="search" value="{{ $search }}" placeholder="Cari Mahasiswa..." class="block w-full pl-10 pr-3 py-2.5 border border-slate-200 dark:border-slate-700 rounded-xl bg-white dark:bg-slate-900 text-slate-900 dark:text-slate-100 focus:ring-primary-500 focus:border-primary-500 sm:text-sm shadow-sm transition-shadow focus:shadow-md focus:shadow-primary-500/10">
                </form>
            </div>
        </div>

        <!-- Table -->
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                <thead class="bg-gray-50 dark:bg-gray-900/50">
                    <tr>
                        <th scope="col" class="px-6 py-3 text-center text-xs font-semibold text-gray-500 dark:text-gray-400 uppercase tracking-wider">No</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-semibold text-gray-500 dark:text-gray-400 uppercase tracking-wider">NPM</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-semibold text-gray-500 dark:text-gray-400 uppercase tracking-wider">Nama</th>
                        <th scope="col" class="px-6 py-3 text-center text-xs font-semibold text-gray-500 dark:text-gray-400 uppercase tracking-wider">Angkatan</th>
                        <th scope="col" class="px-6 py-3 text-center text-xs font-semibold text-gray-500 dark:text-gray-400 uppercase tracking-wider">Semester Lulus</th>
                        <th scope="col" class="px-6 py-3 text-center text-xs font-semibold text-gray-500 dark:text-gray-400 uppercase tracking-wider">Label</th>
                        <th scope="col" class="px-6 py-3 text-center text-xs font-semibold text-slate-500 dark:text-slate-400 uppercase tracking-wider">Aksi</th>
                    </tr>
                </thead>
                <tbody class="bg-white dark:bg-gray-800 divide-y divide-gray-200 dark:divide-gray-700">
                    @forelse ($mahasiswas as $mhs)
                        <tr class="hover:bg-slate-50 dark:hover:bg-slate-750 transition-all duration-200 group">
                            <td class="px-6 py-4 whitespace-nowrap text-center text-sm text-slate-500 group-hover:text-primary-600 transition-colors">{{ $loop->iteration + $mahasiswas->firstItem() - 1 }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-slate-600 font-medium">{{ $mhs->nim }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 h-8 w-8 rounded-full bg-primary-100 flex items-center justify-center text-primary-700 font-bold text-xs shadow-sm">
                                        {{ substr($mhs->nama, 0, 1) }}
                                    </div>
                                    <div class="ml-3">
                                        <div class="text-sm font-semibold text-slate-900 dark:text-white">{{ $mhs->nama }}</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-center text-sm text-slate-600">
                                <span class="px-2.5 py-1 bg-slate-100 text-slate-600 rounded-md font-medium text-xs">{{ $mhs->angkatan }}</span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-center text-sm text-slate-600">{{ $mhs->semester_lulus ?? '-' }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-center">
                                @php
                                    $label = optional($mhs->prediksiKelulusan)->label_aktual;
                                @endphp
                                @if($label == 'Tepat Waktu')
                                    <span class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-semibold bg-green-100 text-green-800">
                                        <span class="w-1.5 h-1.5 rounded-full bg-green-500 mr-1.5"></span>
                                        Tepat Waktu
                                    </span>
                                @elseif($label == 'Terlambat' || $label == 'Berisiko Terlambat' || $label == 'Tidak Tepat Waktu')
                                    <span class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-semibold bg-red-100 text-red-800">
                                        <span class="w-1.5 h-1.5 rounded-full bg-red-500 mr-1.5"></span>
                                        {{ $label }}
                                    </span>
                                @else
                                    <span class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-medium bg-slate-100 text-slate-600">
                                        -
                                    </span>
                                @endif
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-center text-sm font-medium space-x-2 flex justify-center items-center">
                                <a href="{{ route('data-latih.edit', $mhs->id) }}" class="inline-flex items-center px-3 py-1.5 bg-white border border-slate-200 text-slate-600 hover:bg-slate-50 hover:text-primary-600 rounded-lg text-xs font-medium transition-colors">
                                    Edit
                                </a>
                                <form action="{{ route('data-latih.destroy', $mhs->id) }}" method="POST" class="inline-block" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="inline-flex items-center px-3 py-1.5 bg-white border border-slate-200 text-slate-600 hover:bg-red-50 hover:text-red-600 rounded-lg text-xs font-medium transition-colors">
                                        Hapus
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7" class="px-6 py-12 text-center text-gray-500 dark:text-gray-400">
                                <svg class="mx-auto h-12 w-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                                <p class="mt-4 text-sm">Tidak ada data ditemukan.</p>
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
</x-app-layout>
