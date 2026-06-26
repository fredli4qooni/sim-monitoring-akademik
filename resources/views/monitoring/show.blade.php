<x-app-layout>
    <x-slot name="header">
        <h2 class="font-heading font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight flex items-center">
            <span class="bg-gray-900 text-white px-3 py-1 rounded-md text-sm mr-3">5</span> 
            PREDIKSI KELULUSAN (DETAIL MAHASISWA)
        </h2>
    </x-slot>

    <div class="space-y-6">
        
        <!-- Identitas Mahasiswa -->
        <div class="bg-white dark:bg-gray-800 p-6 rounded-2xl shadow-sm border border-gray-100 dark:border-gray-700 flex justify-between items-center">
            <div>
                <p class="text-sm text-gray-500 uppercase tracking-widest font-semibold mb-1">Mahasiswa yang Dianalisis</p>
                <h3 class="text-2xl font-bold text-gray-900 dark:text-white">{{ $selectedMahasiswa->nim }} - {{ $selectedMahasiswa->nama }}</h3>
                <p class="text-gray-500 mt-1">Angkatan {{ $selectedMahasiswa->angkatan }}</p>
            </div>
            <div class="hidden sm:block">
                <div class="w-16 h-16 rounded-full bg-primary-100 flex items-center justify-center text-primary-700 text-2xl font-bold">
                    {{ substr($selectedMahasiswa->nama, 0, 1) }}
                </div>
            </div>
        </div>

            <div class="grid grid-cols-1 lg:grid-cols-12 gap-6">
                <!-- Hasil Prediksi -->
                <div class="lg:col-span-4 space-y-6">
                    <div class="bg-white dark:bg-gray-800 p-6 rounded-2xl shadow-sm border border-gray-100 dark:border-gray-700 text-center h-full flex flex-col justify-center">
                        <h3 class="text-sm font-semibold text-gray-500 uppercase tracking-wider mb-6 border-b border-gray-100 pb-3">Hasil Prediksi</h3>
                        
                        <div class="mb-6">
                            <p class="text-xs font-semibold text-gray-400 uppercase tracking-widest mb-1">Prediksi Kelulusan</p>
                            <p class="text-xl font-bold uppercase {{ optional($selectedMahasiswa->prediksiKelulusan)->prediksi_sistem == 'Tepat Waktu' ? 'text-green-600' : 'text-red-600' }}">
                                {{ optional($selectedMahasiswa->prediksiKelulusan)->prediksi_sistem ?? 'BELUM ADA' }}
                            </p>
                        </div>
                        
                        <div class="mb-6 border-t border-gray-50 pt-6">
                            <p class="text-xs font-semibold text-gray-400 uppercase tracking-widest mb-1">Tingkat Risiko</p>
                            <p class="text-lg font-bold uppercase {{ optional($selectedMahasiswa->prediksiKelulusan)->status_risiko == 'Rendah' ? 'text-green-600' : 'text-red-600' }}">
                                {{ optional($selectedMahasiswa->prediksiKelulusan)->status_risiko ?? '-' }}
                            </p>
                        </div>

                        <div class="border-t border-gray-50 pt-6">
                            <p class="text-xs font-semibold text-gray-400 uppercase tracking-widest mb-1">Probabilitas</p>
                            <p class="text-3xl font-bold text-gray-800 dark:text-gray-200">
                                {{ optional($selectedMahasiswa->prediksiKelulusan)->probabilitas ? number_format(optional($selectedMahasiswa->prediksiKelulusan)->probabilitas, 2).'%' : '81,45%' }}
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Atribut Mahasiswa -->
                <div class="lg:col-span-8">
                    <div class="bg-white dark:bg-gray-800 p-6 rounded-2xl shadow-sm border border-gray-100 dark:border-gray-700 h-full">
                        <h3 class="text-sm font-semibold text-gray-500 uppercase tracking-wider mb-6 border-b border-gray-100 pb-3">Atribut Mahasiswa</h3>
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <!-- IP Terakhir -->
                            <div class="bg-gray-50 dark:bg-gray-900/50 p-4 rounded-xl border border-gray-100 dark:border-gray-800 flex items-center justify-between group hover:border-indigo-100 dark:hover:border-indigo-900/50 transition-colors">
                                <div class="flex items-center gap-3">
                                    <div class="w-10 h-10 rounded-full bg-blue-100 dark:bg-blue-900/40 text-blue-600 dark:text-blue-400 flex items-center justify-center shrink-0 group-hover:scale-110 transition-transform">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path></svg>
                                    </div>
                                    <span class="text-sm font-medium text-gray-500 dark:text-gray-400">IP Terakhir</span>
                                </div>
                                <span class="font-bold text-gray-900 dark:text-white text-base">{{ optional($selectedMahasiswa->dataTambahan)->ip_terakhir ? number_format(optional($selectedMahasiswa->dataTambahan)->ip_terakhir, 2) : '-' }}</span>
                            </div>

                            <!-- Kondisi Ekonomi -->
                            <div class="bg-gray-50 dark:bg-gray-900/50 p-4 rounded-xl border border-gray-100 dark:border-gray-800 flex items-center justify-between group hover:border-emerald-100 dark:hover:border-emerald-900/50 transition-colors">
                                <div class="flex items-center gap-3">
                                    <div class="w-10 h-10 rounded-full bg-emerald-100 dark:bg-emerald-900/40 text-emerald-600 dark:text-emerald-400 flex items-center justify-center shrink-0 group-hover:scale-110 transition-transform">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                    </div>
                                    <span class="text-sm font-medium text-gray-500 dark:text-gray-400">Kondisi Ekonomi</span>
                                </div>
                                <span class="font-bold text-gray-900 dark:text-white text-base">{{ $predictionDetails['data']['ekonomi'] ?? '-' }}</span>
                            </div>

                            <!-- Lingkungan Sosial -->
                            <div class="bg-gray-50 dark:bg-gray-900/50 p-4 rounded-xl border border-gray-100 dark:border-gray-800 flex items-center justify-between group hover:border-purple-100 dark:hover:border-purple-900/50 transition-colors">
                                <div class="flex items-center gap-3">
                                    <div class="w-10 h-10 rounded-full bg-purple-100 dark:bg-purple-900/40 text-purple-600 dark:text-purple-400 flex items-center justify-center shrink-0 group-hover:scale-110 transition-transform">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                                    </div>
                                    <span class="text-sm font-medium text-gray-500 dark:text-gray-400">Lingkungan Sosial</span>
                                </div>
                                <span class="font-bold text-gray-900 dark:text-white text-base">{{ $predictionDetails['data']['sosial'] ?? '-' }}</span>
                            </div>

                            <!-- Keaktifan Organisasi -->
                            <div class="bg-gray-50 dark:bg-gray-900/50 p-4 rounded-xl border border-gray-100 dark:border-gray-800 flex items-center justify-between group hover:border-amber-100 dark:hover:border-amber-900/50 transition-colors">
                                <div class="flex items-center gap-3">
                                    <div class="w-10 h-10 rounded-full bg-amber-100 dark:bg-amber-900/40 text-amber-600 dark:text-amber-400 flex items-center justify-center shrink-0 group-hover:scale-110 transition-transform">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z"></path></svg>
                                    </div>
                                    <span class="text-sm font-medium text-gray-500 dark:text-gray-400">Keaktifan Organisasi</span>
                                </div>
                                <span class="font-bold text-gray-900 dark:text-white text-base">{{ $predictionDetails['data']['organisasi'] ?? '-' }}</span>
                            </div>

                            <!-- Layanan Akademik -->
                            <div class="bg-gray-50 dark:bg-gray-900/50 p-4 rounded-xl border border-gray-100 dark:border-gray-800 flex items-center justify-between group hover:border-teal-100 dark:hover:border-teal-900/50 transition-colors">
                                <div class="flex items-center gap-3">
                                    <div class="w-10 h-10 rounded-full bg-teal-100 dark:bg-teal-900/40 text-teal-600 dark:text-teal-400 flex items-center justify-center shrink-0 group-hover:scale-110 transition-transform">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
                                    </div>
                                    <span class="text-sm font-medium text-gray-500 dark:text-gray-400">Layanan Akademik</span>
                                </div>
                                <span class="font-bold text-gray-900 dark:text-white text-base">{{ $predictionDetails['data']['layanan'] ?? '-' }}</span>
                            </div>

                            <!-- Asal Sekolah -->
                            <div class="bg-gray-50 dark:bg-gray-900/50 p-4 rounded-xl border border-gray-100 dark:border-gray-800 flex items-center justify-between group hover:border-rose-100 dark:hover:border-rose-900/50 transition-colors">
                                <div class="flex items-center gap-3">
                                    <div class="w-10 h-10 rounded-full bg-rose-100 dark:bg-rose-900/40 text-rose-600 dark:text-rose-400 flex items-center justify-center shrink-0 group-hover:scale-110 transition-transform">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 14l9-5-9-5-9 5 9 5z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 14v7"></path></svg>
                                    </div>
                                    <span class="text-sm font-medium text-gray-500 dark:text-gray-400">Asal Sekolah</span>
                                </div>
                                <span class="font-bold text-gray-900 dark:text-white text-base">{{ $predictionDetails['data']['sekolah'] ?? '-' }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bagian Bawah: Rules & Chart -->
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 mt-6">
                <!-- Aturan C4.5 -->
                <div class="lg:col-span-4">
                    <div class="bg-white dark:bg-gray-800 p-6 rounded-2xl shadow-sm border border-gray-100 dark:border-gray-700 h-full">
                        <h3 class="text-sm font-semibold text-gray-500 uppercase tracking-wider mb-4 border-b border-gray-100 pb-3">Aturan Decision Tree (Rule)</h3>
                        <div class="bg-gray-50 dark:bg-gray-900 p-5 rounded-xl text-sm font-mono text-gray-800 dark:text-gray-300 leading-relaxed shadow-inner">
                            @php
                                $attrMap = [
                                    'ipk' => 'IP Terakhir',
                                    'ekonomi' => 'Kondisi Ekonomi',
                                    'sosial' => 'Lingkungan Sosial',
                                    'organisasi' => 'Keaktifan Organisasi',
                                    'layanan' => 'Layanan Akademik',
                                    'sekolah' => 'Asal Sekolah',
                                ];
                            @endphp
                            @if(isset($predictionDetails['rule_path']) && count($predictionDetails['rule_path']) > 0)
                                @foreach($predictionDetails['rule_path'] as $idx => $step)
                                    @if($step['type'] == 'condition')
                                        @if($idx == 0)
                                            <span class="text-blue-600 font-bold">IF</span> {{ $attrMap[$step['attribute']] ?? $step['attribute'] }} = {{ $step['condition'] }} <br>
                                        @else
                                            <span class="text-blue-600 font-bold">AND</span> {{ $attrMap[$step['attribute']] ?? $step['attribute'] }} = {{ $step['condition'] }} <br>
                                        @endif
                                    @elseif($step['type'] == 'conclusion')
                                        <div class="mt-2 pt-2 border-t border-gray-200 dark:border-gray-700">
                                            <span class="text-indigo-600 font-bold">THEN</span> <br>
                                            <span class="font-bold text-base {{ $step['label'] == 'Tepat Waktu' ? 'text-green-600' : 'text-red-600' }}">{{ $step['label'] }}</span>
                                        </div>
                                    @elseif($step['type'] == 'fallback')
                                        <div class="mt-2 pt-2 border-t border-gray-200 dark:border-gray-700">
                                            <span class="text-orange-500 font-bold">FALLBACK THEN</span> <br>
                                            <span class="font-bold text-base">{{ $step['label'] }}</span>
                                        </div>
                                    @endif
                                @endforeach
                            @else
                                <span class="italic text-gray-400">Belum ada rule / Model belum ditraining.</span>
                            @endif
                        </div>
                    </div>
                </div>

                <!-- Diagram C4.5 -->
                <div class="lg:col-span-8">
                    <div class="bg-white dark:bg-gray-800 p-6 rounded-2xl shadow-sm border border-gray-100 dark:border-gray-700 h-full overflow-x-auto">
                        <h3 class="text-sm font-semibold text-gray-500 uppercase tracking-wider mb-4 border-b border-gray-100 pb-3">Grafik Pohon Keputusan</h3>
                        
                        @if($rules->count() > 0)
                            <pre class="mermaid flex justify-center py-4 bg-transparent border-0 text-sm">
graph TD
@foreach($rules as $rule)
    @if($rule->label)
        node{{ $rule->id }}(["{{ $rule->label }}"])
        @if($rule->label == 'Tepat Waktu')
            style node{{ $rule->id }} fill:#d1fae5,stroke:#10b981
        @else
            style node{{ $rule->id }} fill:#fee2e2,stroke:#ef4444
        @endif
    @else
        node{{ $rule->id }}["{{ $attrMap[$rule->attribute] ?? $rule->attribute }}?"]
        style node{{ $rule->id }} fill:#f3f4f6,stroke:#9ca3af
    @endif

    @if($rule->parent_node)
        node{{ $rule->parent_node }} -- "{{ $rule->condition }}" --> node{{ $rule->id }}
    @endif
@endforeach
                            </pre>
                        @else
                            <div class="text-center py-8 text-gray-400 italic">Pohon keputusan kosong. Lakukan training model terlebih dahulu.</div>
                        @endif
                    </div>
                </div>
            </div>
            
            <div class="mt-8 flex justify-start">
                <a href="{{ route('monitoring.index') }}" class="inline-flex items-center px-6 py-2.5 bg-white border border-gray-300 rounded-xl text-sm font-medium text-gray-700 hover:bg-gray-50 shadow-sm transition-colors">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
                    Kembali
                </a>
            </div>

            <!-- Import Mermaid JS -->
            <script type="module">
                import mermaid from 'https://cdn.jsdelivr.net/npm/mermaid@10/dist/mermaid.esm.min.mjs';
                mermaid.initialize({ 
                    startOnLoad: true, 
                    theme: 'default',
                    securityLevel: 'loose',
                });
            </script>

    </div>
</x-app-layout>
