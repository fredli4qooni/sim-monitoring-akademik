<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-heading font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Dashboard') }}
            </h2>
            <div class="flex items-center gap-2">
                <div class="h-8 w-8 rounded-full bg-gray-200 flex items-center justify-center text-gray-600">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                </div>
                <span class="text-sm font-medium text-gray-700 dark:text-gray-300">Admin Prodi</span>
            </div>
        </div>
    </x-slot>

    @php
        $pctTepatWaktu = $totalMahasiswa > 0 ? round(($prediksiTepatWaktu / $totalMahasiswa) * 100, 2) : 0;
        $pctTidakTepatWaktu = $totalMahasiswa > 0 ? round(($prediksiTerlambat / $totalMahasiswa) * 100, 2) : 0;
        $pctRisikoTinggi = $totalMahasiswa > 0 ? round(($risikoTinggi / $totalMahasiswa) * 100, 2) : 0;
    @endphp

    <div class="space-y-6">
        <!-- Overview Cards -->
        <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
            <!-- Total Mahasiswa -->
            <div class="bg-white dark:bg-gray-800 p-6 rounded-2xl shadow-sm border border-gray-100 dark:border-gray-700 flex flex-col justify-center relative overflow-hidden group">
                <div class="absolute inset-0 bg-gradient-to-br from-indigo-50 to-transparent dark:from-indigo-900/20 opacity-0 group-hover:opacity-100 transition-opacity"></div>
                <div class="relative z-10">
                    <p class="text-xs font-semibold text-gray-500 mb-4 uppercase tracking-wider text-center">Total Mahasiswa Aktif</p>
                    <div class="flex items-center justify-center gap-4">
                        <div class="text-indigo-400 dark:text-indigo-500 bg-indigo-50 dark:bg-indigo-900/30 p-3 rounded-2xl">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                        </div>
                        <div class="text-left">
                            <p class="text-3xl font-bold bg-clip-text text-transparent bg-gradient-to-r from-gray-900 to-gray-600 dark:from-white dark:to-gray-300 leading-none mb-1">{{ number_format($totalMahasiswa) }}</p>
                            <p class="text-sm font-medium text-gray-500">Mahasiswa</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Prediksi Tepat Waktu -->
            <div class="bg-white dark:bg-gray-800 p-6 rounded-2xl shadow-sm border border-gray-100 dark:border-gray-700 flex flex-col justify-center relative overflow-hidden group">
                <div class="absolute inset-0 bg-gradient-to-br from-emerald-50 to-transparent dark:from-emerald-900/20 opacity-0 group-hover:opacity-100 transition-opacity"></div>
                <div class="relative z-10">
                    <p class="text-xs font-semibold text-gray-500 mb-4 uppercase tracking-wider text-center">Prediksi Tepat Waktu</p>
                    <div class="flex items-center justify-center gap-4">
                        <div class="text-emerald-500 dark:text-emerald-400 bg-emerald-50 dark:bg-emerald-900/30 p-3 rounded-2xl">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        </div>
                        <div class="text-left">
                            <p class="text-3xl font-bold bg-clip-text text-transparent bg-gradient-to-r from-emerald-600 to-teal-500 leading-none mb-1">{{ number_format($prediksiTepatWaktu) }}</p>
                            <p class="text-sm font-bold text-emerald-600">({{ number_format($pctTepatWaktu, 2, ',', '.') }}%)</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Prediksi Tidak Tepat Waktu -->
            <div class="bg-white dark:bg-gray-800 p-6 rounded-2xl shadow-sm border border-gray-100 dark:border-gray-700 flex flex-col justify-center relative overflow-hidden group">
                <div class="absolute inset-0 bg-gradient-to-br from-red-50 to-transparent dark:from-red-900/20 opacity-0 group-hover:opacity-100 transition-opacity"></div>
                <div class="relative z-10">
                    <p class="text-xs font-semibold text-gray-500 mb-4 uppercase tracking-wider text-center">Prediksi Tidak Tepat Waktu</p>
                    <div class="flex items-center justify-center gap-4">
                        <div class="text-red-500 dark:text-red-400 bg-red-50 dark:bg-red-900/30 p-3 rounded-2xl">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        </div>
                        <div class="text-left">
                            <p class="text-3xl font-bold bg-clip-text text-transparent bg-gradient-to-r from-red-600 to-rose-500 leading-none mb-1">{{ number_format($prediksiTerlambat) }}</p>
                            <p class="text-sm font-bold text-red-600">({{ number_format($pctTidakTepatWaktu, 2, ',', '.') }}%)</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Risiko Tinggi -->
            <div class="bg-white dark:bg-gray-800 p-6 rounded-2xl shadow-sm border border-gray-100 dark:border-gray-700 flex flex-col justify-center relative overflow-hidden group">
                <div class="absolute inset-0 bg-gradient-to-br from-orange-50 to-transparent dark:from-orange-900/20 opacity-0 group-hover:opacity-100 transition-opacity"></div>
                <div class="relative z-10">
                    <p class="text-xs font-semibold text-gray-500 mb-4 uppercase tracking-wider text-center">Mahasiswa Risiko Tinggi</p>
                    <div class="flex items-center justify-center gap-4">
                        <div class="text-orange-500 dark:text-orange-400 bg-orange-50 dark:bg-orange-900/30 p-3 rounded-2xl">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path></svg>
                        </div>
                        <div class="text-left">
                            <p class="text-3xl font-bold bg-clip-text text-transparent bg-gradient-to-r from-orange-500 to-amber-500 leading-none mb-1">{{ number_format($risikoTinggi) }}</p>
                            <p class="text-sm font-bold text-orange-600">({{ number_format($pctRisikoTinggi, 2, ',', '.') }}%)</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Charts Row -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
            <!-- Pie Chart: Distribusi Prediksi Kelulusan -->
            <div class="bg-white dark:bg-gray-800 p-6 rounded-2xl shadow-sm border border-gray-100 dark:border-gray-700 flex flex-col">
                <h3 class="text-sm font-semibold text-gray-800 dark:text-gray-200 mb-6">Distribusi Prediksi Kelulusan</h3>
                <div class="relative flex-1 flex items-center justify-center min-h-[250px]">
                    <div class="w-full h-full">
                        <canvas id="distribusiChart"></canvas>
                    </div>
                </div>
            </div>

            <!-- Line Chart: Tren Prediksi per Angkatan -->
            <div class="bg-white dark:bg-gray-800 p-6 rounded-2xl shadow-sm border border-gray-100 dark:border-gray-700 flex flex-col">
                <h3 class="text-sm font-semibold text-gray-800 dark:text-gray-200 mb-6">Tren Prediksi Kelulusan per Angkatan</h3>
                <div class="relative flex-1 min-h-[250px] w-full">
                    <canvas id="trendChart"></canvas>
                </div>
            </div>
        </div>

        <!-- High Risk Table -->
        <div class="bg-white dark:bg-gray-800 shadow-sm border border-gray-100 dark:border-gray-700 rounded-2xl overflow-hidden">
            <div class="p-6 border-b border-gray-100 dark:border-gray-700 flex justify-between items-center">
                <h3 class="text-sm font-semibold text-gray-800 dark:text-gray-200">Mahasiswa Risiko Tinggi (Perlu Dipantau)</h3>
            </div>
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-100 dark:divide-gray-700">
                    <thead class="bg-gray-50 dark:bg-gray-900">
                        <tr>
                            <th class="px-6 py-3 text-center text-xs font-semibold text-gray-500 uppercase tracking-wider">No</th>
                            <th class="px-6 py-3 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">NPM</th>
                            <th class="px-6 py-3 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">Nama</th>
                            <th class="px-6 py-3 text-center text-xs font-semibold text-gray-500 uppercase tracking-wider">Angkatan</th>
                            <th class="px-6 py-3 text-center text-xs font-semibold text-gray-500 uppercase tracking-wider">IP Terakhir</th>
                            <th class="px-6 py-3 text-center text-xs font-semibold text-gray-500 uppercase tracking-wider">Prediksi</th>
                            <th class="px-6 py-3 text-center text-xs font-semibold text-gray-500 uppercase tracking-wider">Tingkat Risiko</th>
                            <th class="px-6 py-3 text-right text-xs font-semibold text-gray-500 uppercase tracking-wider">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white dark:bg-gray-800 divide-y divide-gray-100 dark:divide-gray-700">
                        @forelse($highRiskStudents as $index => $prediksi)
                            <tr class="hover:bg-gray-50 dark:hover:bg-gray-750 transition-colors">
                                <td class="px-6 py-4 whitespace-nowrap text-center text-sm text-gray-500">{{ $index + 1 }}</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $prediksi->mahasiswa->nim }}</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 dark:text-gray-100">{{ $prediksi->mahasiswa->nama }}</td>
                                <td class="px-6 py-4 whitespace-nowrap text-center text-sm text-gray-500">{{ $prediksi->mahasiswa->angkatan }}</td>
                                <td class="px-6 py-4 whitespace-nowrap text-center text-sm text-gray-500">{{ optional($prediksi->mahasiswa->dataTambahan)->ip_terakhir ?? '-' }}</td>
                                <td class="px-6 py-4 whitespace-nowrap text-center text-sm text-gray-500">{{ $prediksi->prediksi_sistem }}</td>
                                <td class="px-6 py-4 whitespace-nowrap text-center text-sm text-gray-500">{{ $prediksi->status_risiko }}</td>
                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm">
                                    <a href="{{ route('monitoring.show', $prediksi->mahasiswa->id) }}" class="inline-flex items-center justify-center px-3 py-1.5 rounded-lg border border-gray-200 bg-white text-gray-600 hover:bg-gray-50 text-xs font-medium shadow-sm transition-colors">
                                        Lihat
                                    </a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="8" class="px-6 py-8 text-center text-gray-500 text-sm">
                                    Tidak ada mahasiswa risiko tinggi saat ini.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Chart.js Script -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const chartOptions = {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        position: 'right',
                        labels: {
                            usePointStyle: true,
                            boxWidth: 8,
                            padding: 20,
                            font: { size: 12, family: "'Inter', sans-serif" }
                        }
                    }
                }
            };

            // Donut Chart: Distribusi Prediksi
            const ctxDist = document.getElementById('distribusiChart').getContext('2d');
            // Setup Gradients
            const gradientTepat = ctxDist.createLinearGradient(0, 0, 0, 300);
            gradientTepat.addColorStop(0, 'rgba(16, 185, 129, 0.7)'); // Emerald 500
            gradientTepat.addColorStop(1, 'rgba(4, 120, 87, 0.4)'); // Emerald 700

            const gradientTidakTepat = ctxDist.createLinearGradient(0, 0, 0, 300);
            gradientTidakTepat.addColorStop(0, 'rgba(239, 68, 68, 0.7)'); // Red 500
            gradientTidakTepat.addColorStop(1, 'rgba(185, 28, 28, 0.4)'); // Red 700

            new Chart(ctxDist, {
                type: 'doughnut',
                data: {
                    labels: ['Tepat Waktu (≤ 8 Semester): {{ $prediksiTepatWaktu }}', 'Tidak Tepat Waktu (≥ 9 Semester): {{ $prediksiTerlambat }}'],
                    datasets: [{
                        data: [{{ $prediksiTepatWaktu }}, {{ $prediksiTerlambat }}],
                        backgroundColor: [gradientTepat, gradientTidakTepat],
                        borderWidth: 2,
                        borderColor: '#ffffff',
                        hoverOffset: 4
                    }]
                },
                options: chartOptions
            });

            // Line Chart: Trend Angkatan
            const ctxTrend = document.getElementById('trendChart').getContext('2d');
            
            // Gradient for Line Fill (optional, making it look modern)
            const fillTepat = ctxTrend.createLinearGradient(0, 0, 0, 300);
            fillTepat.addColorStop(0, 'rgba(16, 185, 129, 0.2)');
            fillTepat.addColorStop(1, 'rgba(16, 185, 129, 0)');

            const fillTidakTepat = ctxTrend.createLinearGradient(0, 0, 0, 300);
            fillTidakTepat.addColorStop(0, 'rgba(239, 68, 68, 0.2)');
            fillTidakTepat.addColorStop(1, 'rgba(239, 68, 68, 0)');

            new Chart(ctxTrend, {
                type: 'line',
                data: {
                    labels: {!! json_encode($angkatanLabels) !!},
                    datasets: [
                        {
                            label: 'Tepat Waktu',
                            data: {!! json_encode($trendTepatWaktu) !!},
                            borderColor: '#10b981',
                            backgroundColor: fillTepat,
                            borderWidth: 2,
                            pointRadius: 4,
                            pointBackgroundColor: '#10b981',
                            fill: true,
                            tension: 0.3
                        },
                        {
                            label: 'Tidak Tepat Waktu',
                            data: {!! json_encode($trendTidakTepatWaktu) !!},
                            borderColor: '#ef4444',
                            backgroundColor: fillTidakTepat,
                            borderWidth: 2,
                            pointRadius: 4,
                            pointBackgroundColor: '#ef4444',
                            fill: true,
                            tension: 0.3
                        }
                    ]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            position: 'right',
                            labels: {
                                usePointStyle: true,
                                boxWidth: 8,
                                padding: 20,
                                font: { size: 12, family: "'Inter', sans-serif" }
                            }
                        }
                    },
                    scales: {
                        y: {
                            beginAtZero: true,
                            grid: { color: '#f3f4f6', drawBorder: false },
                            border: { display: false },
                            ticks: { precision: 0, stepSize: 1 }
                        },
                        x: {
                            grid: { display: false, drawBorder: false },
                            border: { display: false }
                        }
                    }
                }
            });
        });
    </script>
</x-app-layout>
