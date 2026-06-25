<x-app-layout>
    <x-slot name="header">
        <h2 class="font-heading font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <!-- Overview Cards -->
    <div class="grid grid-cols-2 md:grid-cols-3 xl:grid-cols-6 gap-4 mb-8">
        <!-- Total Mahasiswa -->
        <div class="bg-white overflow-hidden shadow-saas rounded-3xl border border-slate-100/50">
            <div class="p-4 flex flex-col items-center text-center sm:flex-row sm:text-left sm:items-start gap-3">
                <div class="p-3 rounded-2xl bg-primary-50 text-primary-600 shrink-0">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                </div>
                <div class="min-w-0 flex-1">
                    <p class="text-xs font-semibold text-slate-500 uppercase tracking-wide truncate">Total Mhs</p>
                    <p class="mt-1 text-2xl font-heading font-bold text-slate-900">{{ number_format($totalMahasiswa) }}</p>
                </div>
            </div>
        </div>

        <!-- Risiko Rendah -->
        <div class="bg-white overflow-hidden shadow-saas rounded-3xl border border-slate-100/50">
            <div class="p-4 flex flex-col items-center text-center sm:flex-row sm:text-left sm:items-start gap-3">
                <div class="p-3 rounded-2xl bg-green-50 text-green-600 shrink-0">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                </div>
                <div class="min-w-0 flex-1">
                    <p class="text-xs font-semibold text-slate-500 uppercase tracking-wide">Risiko Rendah</p>
                    <p class="mt-1 text-2xl font-heading font-bold text-slate-900">{{ number_format($risikoRendah) }}</p>
                </div>
            </div>
        </div>

        <!-- Risiko Sedang -->
        <div class="bg-white overflow-hidden shadow-saas rounded-3xl border border-slate-100/50">
            <div class="p-4 flex flex-col items-center text-center sm:flex-row sm:text-left sm:items-start gap-3">
                <div class="p-3 rounded-2xl bg-yellow-50 text-yellow-600 shrink-0">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path></svg>
                </div>
                <div class="min-w-0 flex-1">
                    <p class="text-xs font-semibold text-slate-500 uppercase tracking-wide">Risiko Sedang</p>
                    <p class="mt-1 text-2xl font-heading font-bold text-slate-900">{{ number_format($risikoSedang) }}</p>
                </div>
            </div>
        </div>

        <!-- Risiko Tinggi -->
        <div class="bg-white overflow-hidden shadow-saas rounded-3xl border border-slate-100/50">
            <div class="p-4 flex flex-col items-center text-center sm:flex-row sm:text-left sm:items-start gap-3">
                <div class="p-3 rounded-2xl bg-red-50 text-red-600 shrink-0">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path></svg>
                </div>
                <div class="min-w-0 flex-1">
                    <p class="text-xs font-semibold text-slate-500 uppercase tracking-wide">Risiko Tinggi</p>
                    <p class="mt-1 text-2xl font-heading font-bold text-slate-900">{{ number_format($risikoTinggi) }}</p>
                </div>
            </div>
        </div>

        <!-- Prediksi Tepat Waktu -->
        <div class="bg-white overflow-hidden shadow-saas rounded-3xl border border-slate-100/50">
            <div class="p-4 flex flex-col items-center text-center sm:flex-row sm:text-left sm:items-start gap-3">
                <div class="p-3 rounded-2xl bg-teal-50 text-teal-600 shrink-0">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path></svg>
                </div>
                <div class="min-w-0 flex-1">
                    <p class="text-xs font-semibold text-slate-500 uppercase tracking-wide">Tepat Waktu</p>
                    <p class="mt-1 text-2xl font-heading font-bold text-slate-900">{{ number_format($prediksiTepatWaktu) }}</p>
                </div>
            </div>
        </div>

        <!-- Prediksi Terlambat -->
        <div class="bg-white overflow-hidden shadow-saas rounded-3xl border border-slate-100/50">
            <div class="p-4 flex flex-col items-center text-center sm:flex-row sm:text-left sm:items-start gap-3">
                <div class="p-3 rounded-2xl bg-orange-50 text-orange-600 shrink-0">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                </div>
                <div class="min-w-0 flex-1">
                    <p class="text-xs font-semibold text-slate-500 uppercase tracking-wide">Terlambat</p>
                    <p class="mt-1 text-2xl font-heading font-bold text-slate-900">{{ number_format($prediksiTerlambat) }}</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Charts Row 1 -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mb-8">
        <!-- Donut Chart: Distribusi Risiko -->
        <div class="bg-white shadow-saas rounded-3xl border border-slate-100/50 p-6">
            <h3 class="text-lg font-heading font-semibold text-slate-900 mb-6">Distribusi Risiko Kelulusan</h3>
            <div class="relative h-64 w-full">
                <canvas id="riskChart"></canvas>
            </div>
        </div>

        <!-- Bar Chart: Distribusi Angkatan -->
        <div class="bg-white shadow-saas rounded-3xl border border-slate-100/50 p-6">
            <h3 class="text-lg font-heading font-semibold text-slate-900 mb-6">Distribusi Angkatan Mahasiswa</h3>
            <div class="relative h-64 w-full">
                <canvas id="angkatanChart"></canvas>
            </div>
        </div>
    </div>



    <!-- High Risk List -->
    <div class="bg-white shadow-saas rounded-3xl border border-slate-100/50 overflow-hidden mb-8">
        <div class="p-6 border-b border-slate-100 flex justify-between items-center">
            <h3 class="text-lg font-heading font-semibold text-slate-900">Daftar Mahasiswa Risiko Tinggi</h3>
            <a href="{{ route('monitoring.index') }}" class="text-sm text-primary-600 hover:text-primary-700 font-medium">Lihat Semua &rarr;</a>
        </div>
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-slate-100">
                <thead class="bg-slate-50 border-b border-slate-100">
                    <tr>
                        <th class="px-6 py-4 text-left text-xs font-semibold text-slate-500 uppercase tracking-wider">Mahasiswa</th>
                        <th class="px-6 py-4 text-center text-xs font-semibold text-slate-500 uppercase tracking-wider">NIM</th>
                        <th class="px-6 py-4 text-center text-xs font-semibold text-slate-500 uppercase tracking-wider">Prediksi</th>
                        <th class="px-6 py-4 text-right text-xs font-semibold text-slate-500 uppercase tracking-wider">Aksi</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-slate-100">
                    @forelse($highRiskStudents as $prediksi)
                        <tr class="hover:bg-slate-50/50 transition-colors">
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-slate-900">
                                {{ $prediksi->mahasiswa->nama }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-center text-sm text-slate-500">
                                {{ $prediksi->mahasiswa->nim }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-center">
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-red-100 text-red-800">
                                    {{ $prediksi->prediksi_sistem }}
                                </span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm text-slate-500">
                                <a href="{{ route('akademik.show', $prediksi->mahasiswa->id) }}" class="text-primary-600 hover:text-primary-900 font-medium">Detail</a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="px-6 py-8 text-center text-slate-500 text-sm">
                                Tidak ada mahasiswa berisiko tinggi saat ini.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Risk Chart
            const ctxRisk = document.getElementById('riskChart').getContext('2d');
            new Chart(ctxRisk, {
                type: 'doughnut',
                data: {
                    labels: ['Tepat Waktu', 'Terlambat'],
                    datasets: [{
                        data: [{{ $risikoRendah }}, {{ $risikoTinggi }}],
                        backgroundColor: [
                            'rgba(16, 185, 129, 0.8)', // Green
                            'rgba(239, 68, 68, 0.8)'   // Red
                        ],
                        borderWidth: 0,
                        hoverOffset: 4
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: { position: 'bottom' }
                    },
                    cutout: '70%'
                }
            });

            // Angkatan Chart (Bar)
            const ctxAngkatan = document.getElementById('angkatanChart').getContext('2d');
            new Chart(ctxAngkatan, {
                type: 'bar',
                data: {
                    labels: {!! json_encode($angkatanLabels) !!},
                    datasets: [{
                        label: 'Jumlah Mahasiswa',
                        data: {!! json_encode($angkatanData) !!},
                        backgroundColor: 'rgba(99, 102, 241, 0.8)',
                        borderRadius: 4,
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: { display: false }
                    },
                    scales: {
                        y: { beginAtZero: true, grid: { display: true, color: 'rgba(156, 163, 175, 0.1)' } },
                        x: { grid: { display: false } }
                    }
                }
            });


        });
    </script>
</x-app-layout>
