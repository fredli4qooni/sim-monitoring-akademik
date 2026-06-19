<x-app-layout>
    <x-slot name="header">
        <h2 class="font-heading font-semibold text-xl text-slate-800 dark:text-slate-200 leading-tight">
            {{ __('Dasbor Akademik Mahasiswa') }}
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            
            <!-- Welcome Banner -->
            <div class="bg-gradient-to-r from-primary-600 to-indigo-600 rounded-3xl p-8 text-white shadow-lg relative overflow-hidden">
                <div class="absolute inset-0 bg-white/10" style="background-image: radial-gradient(circle at 2px 2px, rgba(255,255,255,0.1) 1px, transparent 0); background-size: 24px 24px;"></div>
                <div class="relative z-10 flex flex-col md:flex-row justify-between items-center gap-6">
                    <div>
                        <h3 class="text-2xl font-heading font-bold mb-2">Selamat Datang, {{ $mahasiswa->nama }}!</h3>
                        <p class="text-primary-100 opacity-90">NIM: {{ $mahasiswa->nim }} | Angkatan: {{ $mahasiswa->angkatan }}</p>
                    </div>
                    @if($prediksi)
                    <div class="bg-white/20 backdrop-blur-md rounded-2xl p-4 border border-white/20 text-center min-w-[200px]">
                        <p class="text-sm text-primary-100 mb-1">Status Prediksi</p>
                        @if($prediksi->hasil_prediksi === 'Tepat Waktu')
                            <div class="text-xl font-bold text-green-300">🎓 Tepat Waktu</div>
                        @else
                            <div class="text-xl font-bold text-yellow-300">⚠️ Terlambat</div>
                        @endif
                    </div>
                    @endif
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- IPK Card -->
                <div class="bg-white dark:bg-slate-800 rounded-3xl p-6 shadow-sm border border-slate-100 dark:border-slate-700">
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 rounded-xl bg-blue-50 text-blue-600 flex items-center justify-center">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                        </div>
                        <div>
                            <p class="text-sm text-slate-500 font-medium">IPK Saat Ini</p>
                            <h4 class="text-2xl font-bold text-slate-800 dark:text-slate-200">{{ $ipk }}</h4>
                        </div>
                    </div>
                </div>

                <!-- Total SKS Card -->
                <div class="bg-white dark:bg-slate-800 rounded-3xl p-6 shadow-sm border border-slate-100 dark:border-slate-700">
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 rounded-xl bg-purple-50 text-purple-600 flex items-center justify-center">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path></svg>
                        </div>
                        <div>
                            <p class="text-sm text-slate-500 font-medium">Total SKS</p>
                            <h4 class="text-2xl font-bold text-slate-800 dark:text-slate-200">{{ $totalSks }}</h4>
                        </div>
                    </div>
                </div>

                <!-- Sisa SKS -->
                <div class="bg-white dark:bg-slate-800 rounded-3xl p-6 shadow-sm border border-slate-100 dark:border-slate-700">
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 rounded-xl bg-green-50 text-green-600 flex items-center justify-center">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        </div>
                        <div>
                            <p class="text-sm text-slate-500 font-medium">Sisa SKS Lulus</p>
                            <h4 class="text-2xl font-bold text-slate-800 dark:text-slate-200">{{ max(0, 144 - $totalSks) }}</h4>
                        </div>
                    </div>
                </div>

                <!-- Semester Tempuh -->
                <div class="bg-white dark:bg-slate-800 rounded-3xl p-6 shadow-sm border border-slate-100 dark:border-slate-700">
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 rounded-xl bg-orange-50 text-orange-600 flex items-center justify-center">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                        </div>
                        <div>
                            <p class="text-sm text-slate-500 font-medium">Semester Tempuh</p>
                            <h4 class="text-2xl font-bold text-slate-800 dark:text-slate-200">{{ $dataAkademik->count() }}</h4>
                        </div>
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                <!-- Riwayat Akademik (Kiri, 2 Col) -->
                <div class="lg:col-span-2 bg-white dark:bg-slate-800 rounded-3xl shadow-sm border border-slate-100 dark:border-slate-700 overflow-hidden">
                    <div class="px-6 py-4 border-b border-slate-100 dark:border-slate-700 bg-slate-50/50 dark:bg-slate-800/50">
                        <h3 class="font-semibold text-slate-800 dark:text-slate-200">Riwayat Studi (KHS)</h3>
                    </div>
                    <div class="p-0 overflow-x-auto">
                        <table class="w-full text-left border-collapse">
                            <thead>
                                <tr class="bg-slate-50/30 dark:bg-slate-800/30 border-b border-slate-100 dark:border-slate-700">
                                    <th class="py-3 px-6 font-semibold text-sm text-slate-500 text-center">Semester</th>
                                    <th class="py-3 px-6 font-semibold text-sm text-slate-500 text-center">SKS</th>
                                    <th class="py-3 px-6 font-semibold text-sm text-slate-500 text-center">IPS</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-slate-100 dark:divide-slate-700">
                                @forelse($dataAkademik as $data)
                                <tr class="hover:bg-slate-50/50 dark:hover:bg-slate-800/50 transition-colors">
                                    <td class="py-3 px-6 text-center font-medium">{{ $data->semester }}</td>
                                    <td class="py-3 px-6 text-center text-slate-600 dark:text-slate-400">{{ $data->sks }}</td>
                                    <td class="py-3 px-6 text-center text-slate-600 dark:text-slate-400">{{ number_format($data->ips, 2) }}</td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="3" class="py-8 px-6 text-center text-slate-500">Belum ada riwayat akademik.</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Info Kelulusan & Prediksi -->
                <div class="bg-white dark:bg-slate-800 rounded-3xl shadow-sm border border-slate-100 dark:border-slate-700 p-6">
                    <h3 class="font-semibold text-slate-800 dark:text-slate-200 mb-4 border-b border-slate-100 pb-3">Informasi Prediksi</h3>
                    @if($prediksi)
                        <div class="space-y-4">
                            <div class="p-4 rounded-xl {{ $prediksi->hasil_prediksi === 'Tepat Waktu' ? 'bg-green-50 text-green-800 border border-green-200' : 'bg-yellow-50 text-yellow-800 border border-yellow-200' }}">
                                <p class="text-sm font-medium opacity-80 mb-1">Hasil Analisis C4.5</p>
                                <p class="text-lg font-bold">{{ $prediksi->hasil_prediksi }}</p>
                            </div>
                            
                            <div>
                                <p class="text-sm text-slate-500 mb-1">Rekomendasi Sistem:</p>
                                <p class="text-sm text-slate-700 dark:text-slate-300">
                                    @if($prediksi->hasil_prediksi === 'Tepat Waktu')
                                        Pertahankan nilai IPK Anda dan fokus pada pengerjaan skripsi sesuai jadwal.
                                    @else
                                        Segera konsultasikan dengan dosen pembimbing akademik Anda untuk memperbaiki nilai dan mengejar ketertinggalan SKS.
                                    @endif
                                </p>
                            </div>
                            <div class="text-xs text-slate-400 mt-4 pt-4 border-t border-slate-100">
                                *Prediksi ini dibuat menggunakan algoritma Decision Tree C4.5 berdasarkan data histori kelulusan mahasiswa.
                            </div>
                        </div>
                    @else
                        <div class="text-center py-6 text-slate-500">
                            <svg class="w-12 h-12 mx-auto text-slate-300 mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                            <p class="text-sm">Prediksi kelulusan belum tersedia. Data akademik Anda mungkin belum lengkap untuk diproses oleh sistem.</p>
                        </div>
                    @endif
                </div>
            </div>

        </div>
    </div>
</x-app-layout>
