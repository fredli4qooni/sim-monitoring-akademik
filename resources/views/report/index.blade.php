<x-app-layout>
    <x-slot name="header">
        <h2 class="font-heading font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Laporan Prediksi Kelulusan') }}
        </h2>
    </x-slot>

    <div class="space-y-6">
        
        <!-- Filter Bar -->
        <div class="bg-white dark:bg-gray-800 p-6 rounded-2xl shadow-sm border border-gray-100 dark:border-gray-700 flex flex-wrap items-center gap-4">
            <form method="GET" action="{{ route('report.index') }}" class="flex items-center gap-4 w-full md:w-auto">
                <span class="text-sm font-medium text-gray-500">Pilih Periode</span>
                <select name="angkatan" class="block py-2.5 px-4 w-64 border border-gray-300 dark:border-gray-700 rounded-xl bg-white dark:bg-gray-900 text-gray-900 dark:text-gray-100 focus:ring-primary-500 focus:border-primary-500 text-sm shadow-sm">
                    <option value="">Semua Angkatan</option>
                    @foreach($listAngkatan as $angk)
                        <option value="{{ $angk }}" {{ request('angkatan') == $angk ? 'selected' : '' }}>Angkatan {{ $angk }}</option>
                    @endforeach
                </select>
                <button type="submit" class="px-5 py-2.5 bg-gray-100 hover:bg-gray-200 text-gray-700 font-medium rounded-xl transition-colors text-sm">
                    Tampilkan
                </button>
            </form>
        </div>

        <!-- Summary Cards -->
        <div>
            <h3 class="text-sm font-semibold text-gray-500 mb-4 uppercase tracking-wider">Ringkasan</h3>
            <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                <!-- Card 1 -->
                <div class="bg-white dark:bg-gray-800 p-6 rounded-2xl shadow-sm border border-gray-100 dark:border-gray-700 text-center relative overflow-hidden group">
                    <div class="absolute inset-0 bg-gradient-to-br from-indigo-50 to-transparent dark:from-indigo-900/20 opacity-0 group-hover:opacity-100 transition-opacity"></div>
                    <div class="relative z-10">
                        <p class="text-xs font-semibold text-gray-500 mb-2 uppercase tracking-wider">Total Mahasiswa</p>
                        <p class="text-4xl font-bold bg-clip-text text-transparent bg-gradient-to-r from-gray-900 to-gray-600 dark:from-white dark:to-gray-300">{{ $totalMahasiswa }}</p>
                    </div>
                </div>
                <!-- Card 2 -->
                <div class="bg-white dark:bg-gray-800 p-6 rounded-2xl shadow-sm border border-gray-100 dark:border-gray-700 text-center flex flex-col justify-center relative overflow-hidden group">
                    <div class="absolute inset-0 bg-gradient-to-br from-emerald-50 to-transparent dark:from-emerald-900/20 opacity-0 group-hover:opacity-100 transition-opacity"></div>
                    <div class="relative z-10">
                        <p class="text-xs font-semibold text-gray-500 mb-2 uppercase tracking-wider">Tepat Waktu</p>
                        <div class="flex items-end justify-center gap-2">
                            <p class="text-4xl font-bold bg-clip-text text-transparent bg-gradient-to-r from-emerald-600 to-teal-500">{{ $tepatWaktu }}</p>
                            <p class="text-sm font-bold text-emerald-600 pb-1 bg-emerald-50 dark:bg-emerald-900/30 px-2 rounded-lg">({{ number_format($pctTepatWaktu, 2, ',', '.') }}%)</p>
                        </div>
                    </div>
                </div>
                <!-- Card 3 -->
                <div class="bg-white dark:bg-gray-800 p-6 rounded-2xl shadow-sm border border-gray-100 dark:border-gray-700 text-center flex flex-col justify-center relative overflow-hidden group">
                    <div class="absolute inset-0 bg-gradient-to-br from-red-50 to-transparent dark:from-red-900/20 opacity-0 group-hover:opacity-100 transition-opacity"></div>
                    <div class="relative z-10">
                        <p class="text-xs font-semibold text-gray-500 mb-2 uppercase tracking-wider">Tidak Tepat Waktu</p>
                        <div class="flex items-end justify-center gap-2">
                            <p class="text-4xl font-bold bg-clip-text text-transparent bg-gradient-to-r from-red-600 to-rose-500">{{ $tidakTepatWaktu }}</p>
                            <p class="text-sm font-bold text-red-600 pb-1 bg-red-50 dark:bg-red-900/30 px-2 rounded-lg">({{ number_format($pctTidakTepatWaktu, 2, ',', '.') }}%)</p>
                        </div>
                    </div>
                </div>
                <!-- Card 4 -->
                <div class="bg-white dark:bg-gray-800 p-6 rounded-2xl shadow-sm border border-gray-100 dark:border-gray-700 text-center flex flex-col justify-center relative overflow-hidden group">
                    <div class="absolute inset-0 bg-gradient-to-br from-orange-50 to-transparent dark:from-orange-900/20 opacity-0 group-hover:opacity-100 transition-opacity"></div>
                    <div class="relative z-10">
                        <p class="text-xs font-semibold text-gray-500 mb-2 uppercase tracking-wider">Risiko Tinggi</p>
                        <div class="flex items-end justify-center gap-2">
                            <p class="text-4xl font-bold bg-clip-text text-transparent bg-gradient-to-r from-orange-500 to-amber-500">{{ $risikoTinggi }}</p>
                            <p class="text-sm font-bold text-orange-600 pb-1 bg-orange-50 dark:bg-orange-900/30 px-2 rounded-lg">({{ number_format($pctRisikoTinggi, 2, ',', '.') }}%)</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Charts Row -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
            <!-- Bar Chart -->
            <div class="bg-white dark:bg-gray-800 p-6 rounded-2xl shadow-sm border border-gray-100 dark:border-gray-700">
                <h3 class="text-sm font-semibold text-gray-800 dark:text-gray-200 mb-6">Distribusi Prediksi Kelulusan</h3>
                <div class="relative h-64 w-full">
                    <canvas id="barChart"></canvas>
                </div>
            </div>

            <!-- Pie Chart -->
            <div class="bg-white dark:bg-gray-800 p-6 rounded-2xl shadow-sm border border-gray-100 dark:border-gray-700 flex flex-col">
                <h3 class="text-sm font-semibold text-gray-800 dark:text-gray-200 mb-6">Distribusi Tingkat Risiko</h3>
                <div class="relative flex-1 flex items-center justify-center">
                    <div class="w-full max-w-[250px]">
                        <canvas id="pieChart"></canvas>
                    </div>
                </div>
            </div>
        </div>

        <!-- Export PDF Button -->
        <div class="flex justify-end pt-4">
            <form action="{{ route('report.pdf') }}" method="GET" target="_blank">
                <input type="hidden" name="angkatan" value="{{ request('angkatan') }}">
                <button type="submit" class="inline-flex items-center justify-center px-6 py-2.5 rounded-xl shadow-md shadow-gray-200 dark:shadow-none text-sm font-semibold text-gray-700 bg-white border border-gray-300 hover:bg-gray-50 transition-all focus:outline-none">
                    <svg class="w-4 h-4 mr-2 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                    Export PDF
                </button>
            </form>
        </div>

    </div>

    <!-- Chart.js Script -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Data Setup
            const dataTepat = {{ $tepatWaktu }};
            const dataTidakTepat = {{ $tidakTepatWaktu }};
            
            const dataRisikoTinggi = {{ $risikoTinggi }};
            const dataRisikoSedang = {{ $risikoSedang }};
            const dataRisikoRendah = {{ $risikoRendah }};

            // Bar Chart Config
            const ctxBar = document.getElementById('barChart').getContext('2d');
            
            // Gradients for Bar Chart
            const gradientTepat = ctxBar.createLinearGradient(0, 0, 0, 400);
            gradientTepat.addColorStop(0, 'rgba(16, 185, 129, 0.7)'); // Emerald 500
            gradientTepat.addColorStop(1, 'rgba(4, 120, 87, 0.4)'); // Emerald 700

            const gradientTidakTepat = ctxBar.createLinearGradient(0, 0, 0, 400);
            gradientTidakTepat.addColorStop(0, 'rgba(239, 68, 68, 0.7)'); // Red 500
            gradientTidakTepat.addColorStop(1, 'rgba(185, 28, 28, 0.4)'); // Red 700

            new Chart(ctxBar, {
                type: 'bar',
                data: {
                    labels: ['Tepat Waktu', 'Tidak Tepat Waktu'],
                    datasets: [{
                        data: [dataTepat, dataTidakTepat],
                        backgroundColor: [gradientTepat, gradientTidakTepat],
                        borderRadius: 8,
                        borderSkipped: false,
                        barPercentage: 0.6
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: { display: false },
                        tooltip: { 
                            enabled: true,
                            backgroundColor: 'rgba(17, 24, 39, 0.9)',
                            titleFont: { size: 13, family: "'Inter', sans-serif" },
                            bodyFont: { size: 14, weight: 'bold', family: "'Inter', sans-serif" },
                            padding: 12,
                            cornerRadius: 8
                        }
                    },
                    scales: {
                        y: {
                            beginAtZero: true,
                            grid: { color: '#f3f4f6', drawBorder: false },
                            border: { display: false },
                            ticks: { font: { family: "'Inter', sans-serif" } }
                        },
                        x: {
                            grid: { display: false, drawBorder: false },
                            border: { display: false },
                            ticks: { font: { family: "'Inter', sans-serif", weight: '500' } }
                        }
                    }
                }
            });

            // Pie Chart Config
            const ctxPie = document.getElementById('pieChart').getContext('2d');
            
            // Gradients for Pie Chart
            const gradientTinggi = ctxPie.createLinearGradient(0, 0, 0, 300);
            gradientTinggi.addColorStop(0, 'rgba(239, 68, 68, 0.7)'); // Red 500
            gradientTinggi.addColorStop(1, 'rgba(153, 27, 27, 0.4)'); // Red 800

            const gradientSedang = ctxPie.createLinearGradient(0, 0, 0, 300);
            gradientSedang.addColorStop(0, 'rgba(245, 158, 11, 0.7)'); // Amber 500
            gradientSedang.addColorStop(1, 'rgba(180, 83, 9, 0.4)'); // Amber 700

            const gradientRendah = ctxPie.createLinearGradient(0, 0, 0, 300);
            gradientRendah.addColorStop(0, 'rgba(16, 185, 129, 0.7)'); // Emerald 500
            gradientRendah.addColorStop(1, 'rgba(4, 120, 87, 0.4)'); // Emerald 700

            new Chart(ctxPie, {
                type: 'doughnut', // Doughnut looks much more modern than a flat pie chart
                data: {
                    labels: ['Risiko Tinggi', 'Risiko Sedang', 'Risiko Rendah'],
                    datasets: [{
                        data: [dataRisikoTinggi, dataRisikoSedang, dataRisikoRendah],
                        backgroundColor: [gradientTinggi, gradientSedang, gradientRendah],
                        borderWidth: 2,
                        borderColor: '#ffffff',
                        hoverOffset: 4
                    }]
                },
                options: {
                    cutout: '65%',
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            position: 'right',
                            labels: {
                                usePointStyle: true,
                                boxWidth: 10,
                                padding: 20,
                                font: { size: 13, family: "'Inter', sans-serif", weight: '500' }
                            }
                        },
                        tooltip: { 
                            backgroundColor: 'rgba(17, 24, 39, 0.9)',
                            titleFont: { size: 13, family: "'Inter', sans-serif" },
                            bodyFont: { size: 14, weight: 'bold', family: "'Inter', sans-serif" },
                            padding: 12,
                            cornerRadius: 8
                        }
                    }
                }
            });
        });
    </script>

</x-app-layout>
