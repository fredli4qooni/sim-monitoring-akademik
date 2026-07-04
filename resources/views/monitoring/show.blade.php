<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center">
            <div class="w-8 h-8 rounded-full bg-primary-600 flex items-center justify-center text-white mr-3 shadow-md shadow-primary-500/20">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path></svg>
            </div>
            <h2 class="font-heading font-bold text-2xl text-primary-600 leading-tight">
                {{ __('Detail Prediksi Mahasiswa') }}
            </h2>
        </div>
    </x-slot>

    <div class="space-y-6">
        
        <!-- Identitas Mahasiswa -->
        <div class="bg-white dark:bg-slate-800 p-6 rounded-3xl shadow-xl shadow-slate-200/50 border border-slate-100/60 dark:border-slate-700 flex justify-between items-center relative overflow-hidden">
            <div class="absolute top-0 right-0 -mt-8 -mr-8 w-32 h-32 bg-primary-500/10 rounded-full blur-2xl"></div>
            <div class="relative z-10">
                <p class="text-xs text-slate-500 uppercase tracking-widest font-bold mb-2">Mahasiswa yang Dianalisis</p>
                <h3 class="text-3xl font-bold text-slate-900 dark:text-white">{{ $selectedMahasiswa->nim }} - {{ $selectedMahasiswa->nama }}</h3>
                <p class="text-slate-500 mt-2 font-medium">Angkatan {{ $selectedMahasiswa->angkatan }}</p>
            </div>
            <div class="hidden sm:block relative z-10">
                <div class="w-20 h-20 rounded-full bg-primary-100 flex items-center justify-center text-primary-700 text-3xl font-bold shadow-sm border border-primary-200/50">
                    {{ substr($selectedMahasiswa->nama, 0, 1) }}
                </div>
            </div>
        </div>

            <div class="grid grid-cols-1 lg:grid-cols-12 gap-6">
                <!-- Hasil Prediksi -->
                <div class="lg:col-span-4 space-y-6">
                    <div class="bg-white dark:bg-slate-800 p-8 rounded-3xl shadow-xl shadow-slate-200/50 border border-slate-100/60 dark:border-slate-700 text-center h-full flex flex-col justify-center relative overflow-hidden group hover:border-primary-200 transition-colors duration-300">
                        <div class="absolute inset-0 bg-primary-50/50 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                        <div class="relative z-10">
                            <h3 class="text-sm font-bold text-slate-500 uppercase tracking-wider mb-6 border-b border-slate-100 pb-3 flex items-center justify-center gap-2">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                                Hasil Prediksi
                            </h3>
                            
                            <div class="mb-6">
                                <p class="text-xs font-semibold text-slate-400 uppercase tracking-widest mb-2">Prediksi Kelulusan</p>
                                <p class="text-2xl font-bold uppercase {{ optional($selectedMahasiswa->prediksiKelulusan)->prediksi_sistem == 'Tepat Waktu' ? 'text-green-600' : 'text-red-600' }}">
                                    {{ optional($selectedMahasiswa->prediksiKelulusan)->prediksi_sistem ?? 'BELUM ADA' }}
                                </p>
                            </div>
                            
                            <div class="mb-6 border-t border-slate-50 pt-6">
                                <p class="text-xs font-semibold text-slate-400 uppercase tracking-widest mb-2">Tingkat Risiko</p>
                                <p class="text-lg font-bold uppercase px-4 py-1.5 rounded-full inline-block {{ optional($selectedMahasiswa->prediksiKelulusan)->status_risiko == 'Rendah' ? 'bg-green-100 text-green-700' : 'bg-red-100 text-red-700' }}">
                                    {{ optional($selectedMahasiswa->prediksiKelulusan)->status_risiko ?? '-' }}
                                </p>
                            </div>

                            <div class="border-t border-slate-50 pt-6">
                                <p class="text-xs font-semibold text-slate-400 uppercase tracking-widest mb-2">Probabilitas / Keyakinan Model</p>
                                <p class="text-4xl font-extrabold text-slate-800 dark:text-slate-200">
                                    {{ optional($selectedMahasiswa->prediksiKelulusan)->probabilitas ? number_format(optional($selectedMahasiswa->prediksiKelulusan)->probabilitas, 2).'%' : '81,45%' }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Atribut Mahasiswa -->
                <div class="lg:col-span-8">
                    <div class="bg-white dark:bg-slate-800 p-8 rounded-3xl shadow-xl shadow-slate-200/50 border border-slate-100/60 dark:border-slate-700 h-full">
                        <h3 class="text-sm font-bold text-slate-500 uppercase tracking-wider mb-6 border-b border-slate-100 pb-3 flex items-center gap-2">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 002-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path></svg>
                            Atribut Mahasiswa
                        </h3>
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <!-- IP Terakhir -->
                            <div class="bg-slate-50 dark:bg-slate-900/50 p-4 rounded-2xl border border-slate-100 dark:border-slate-800 flex items-center gap-4 group hover:border-indigo-200 dark:hover:border-indigo-900/50 transition-colors shadow-sm">
                                <div class="w-12 h-12 rounded-full bg-blue-100 dark:bg-blue-900/40 text-blue-600 dark:text-blue-400 flex items-center justify-center shrink-0 group-hover:scale-110 transition-transform">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path></svg>
                                </div>
                                <div class="flex flex-col">
                                    <span class="text-xs font-semibold text-slate-500 dark:text-slate-400 uppercase tracking-wider">IP Terakhir</span>
                                    <span class="font-bold text-slate-900 dark:text-white text-lg mt-0.5">{{ optional($selectedMahasiswa->dataTambahan)->ip_terakhir ?? '-' }}</span>
                                </div>
                            </div>

                            <!-- Kondisi Ekonomi -->
                            <div class="bg-slate-50 dark:bg-slate-900/50 p-4 rounded-2xl border border-slate-100 dark:border-slate-800 flex items-center gap-4 group hover:border-emerald-200 dark:hover:border-emerald-900/50 transition-colors shadow-sm">
                                <div class="w-12 h-12 rounded-full bg-emerald-100 dark:bg-emerald-900/40 text-emerald-600 dark:text-emerald-400 flex items-center justify-center shrink-0 group-hover:scale-110 transition-transform">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                </div>
                                <div class="flex flex-col">
                                    <span class="text-xs font-semibold text-slate-500 dark:text-slate-400 uppercase tracking-wider">Kondisi Ekonomi</span>
                                    <span class="font-bold text-slate-900 dark:text-white text-lg mt-0.5">{{ $predictionDetails['data']['ekonomi'] ?? '-' }}</span>
                                </div>
                            </div>

                            <!-- Lingkungan Sosial -->
                            <div class="bg-slate-50 dark:bg-slate-900/50 p-4 rounded-2xl border border-slate-100 dark:border-slate-800 flex items-center gap-4 group hover:border-purple-200 dark:hover:border-purple-900/50 transition-colors shadow-sm">
                                <div class="w-12 h-12 rounded-full bg-purple-100 dark:bg-purple-900/40 text-purple-600 dark:text-purple-400 flex items-center justify-center shrink-0 group-hover:scale-110 transition-transform">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                                </div>
                                <div class="flex flex-col">
                                    <span class="text-xs font-semibold text-slate-500 dark:text-slate-400 uppercase tracking-wider">Lingkungan Sosial</span>
                                    <span class="font-bold text-slate-900 dark:text-white text-lg mt-0.5">{{ $predictionDetails['data']['sosial'] ?? '-' }}</span>
                                </div>
                            </div>

                            <!-- Keaktifan Organisasi -->
                            <div class="bg-slate-50 dark:bg-slate-900/50 p-4 rounded-2xl border border-slate-100 dark:border-slate-800 flex items-center gap-4 group hover:border-amber-200 dark:hover:border-amber-900/50 transition-colors shadow-sm">
                                <div class="w-12 h-12 rounded-full bg-amber-100 dark:bg-amber-900/40 text-amber-600 dark:text-amber-400 flex items-center justify-center shrink-0 group-hover:scale-110 transition-transform">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z"></path></svg>
                                </div>
                                <div class="flex flex-col">
                                    <span class="text-xs font-semibold text-slate-500 dark:text-slate-400 uppercase tracking-wider">Keaktifan Organisasi</span>
                                    <span class="font-bold text-slate-900 dark:text-white text-lg mt-0.5">{{ $predictionDetails['data']['organisasi'] ?? '-' }}</span>
                                </div>
                            </div>

                            <!-- Layanan Akademik -->
                            <div class="bg-slate-50 dark:bg-slate-900/50 p-4 rounded-2xl border border-slate-100 dark:border-slate-800 flex items-center gap-4 group hover:border-teal-200 dark:hover:border-teal-900/50 transition-colors shadow-sm">
                                <div class="w-12 h-12 rounded-full bg-teal-100 dark:bg-teal-900/40 text-teal-600 dark:text-teal-400 flex items-center justify-center shrink-0 group-hover:scale-110 transition-transform">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
                                </div>
                                <div class="flex flex-col">
                                    <span class="text-xs font-semibold text-slate-500 dark:text-slate-400 uppercase tracking-wider">Layanan Akademik</span>
                                    <span class="font-bold text-slate-900 dark:text-white text-lg mt-0.5">{{ $predictionDetails['data']['layanan'] ?? '-' }}</span>
                                </div>
                            </div>

                            <!-- Asal Sekolah -->
                            <div class="bg-slate-50 dark:bg-slate-900/50 p-4 rounded-2xl border border-slate-100 dark:border-slate-800 flex items-center gap-4 group hover:border-rose-200 dark:hover:border-rose-900/50 transition-colors shadow-sm">
                                <div class="w-12 h-12 rounded-full bg-rose-100 dark:bg-rose-900/40 text-rose-600 dark:text-rose-400 flex items-center justify-center shrink-0 group-hover:scale-110 transition-transform">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 14l9-5-9-5-9 5 9 5z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 14v7"></path></svg>
                                </div>
                                <div class="flex flex-col">
                                    <span class="text-xs font-semibold text-slate-500 dark:text-slate-400 uppercase tracking-wider">Asal Sekolah</span>
                                    <span class="font-bold text-slate-900 dark:text-white text-lg mt-0.5">{{ $predictionDetails['data']['sekolah'] ?? '-' }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bagian Bawah: Rules & Chart -->
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 mt-6">
                <!-- Aturan C4.5 -->
                <div class="lg:col-span-4">
                    <div class="bg-white dark:bg-slate-800 p-8 rounded-3xl shadow-xl shadow-slate-200/50 border border-slate-100/60 dark:border-slate-700 h-full">
                        <h3 class="text-sm font-bold text-slate-500 uppercase tracking-wider mb-4 border-b border-slate-100 pb-3 flex items-center gap-2">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"></path></svg>
                            Aturan Decision Tree (Rule)
                        </h3>
                        <div class="bg-slate-50 dark:bg-slate-900/50 p-5 rounded-2xl text-sm font-mono text-slate-800 dark:text-slate-300 leading-relaxed shadow-inner border border-slate-100">
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
                    <div x-data="{ zoom: 1, fullScreen: false, isDown: false, startX: 0, scrollLeft: 0, startY: 0, scrollTop: 0 }" 
                         :class="fullScreen ? 'fixed inset-0 z-50 bg-white dark:bg-slate-900 p-4 md:p-8 flex flex-col overflow-hidden' : 'bg-white dark:bg-slate-800 p-8 rounded-3xl shadow-xl shadow-slate-200/50 border border-slate-100/60 dark:border-slate-700 h-full relative flex flex-col'"
                         class="transition-all duration-300">
                        <div x-show="!fullScreen" class="absolute top-0 left-0 w-full h-1 bg-primary-500"></div>
                        
                        <!-- Header with Controls -->
                        <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center border-b border-slate-100 pb-3 mb-4 gap-4">
                            <h3 class="text-sm font-bold text-slate-500 uppercase tracking-wider flex items-center gap-2">
                                <svg class="w-4 h-4 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16V4m0 0L3 8m4-4l4 4m6 0v12m0 0l4-4m-4 4l-4-4"></path></svg>
                                Grafik Pohon Keputusan
                            </h3>
                            
                            <div class="flex items-center gap-2 bg-slate-50 p-1 rounded-xl border border-slate-200 shadow-sm">
                                <button @click="zoom = Math.max(0.3, zoom - 0.1)" class="p-2 text-slate-600 hover:bg-white hover:shadow-sm rounded-lg transition-all" title="Zoom Out">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4"></path></svg>
                                </button>
                                <span class="text-xs font-bold text-slate-500 w-12 text-center" x-text="Math.round(zoom * 100) + '%'"></span>
                                <button @click="zoom = Math.min(3, zoom + 0.1)" class="p-2 text-slate-600 hover:bg-white hover:shadow-sm rounded-lg transition-all" title="Zoom In">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path></svg>
                                </button>
                                <div class="w-px h-4 bg-slate-300 mx-1"></div>
                                <button @click="zoom = 1" class="p-2 text-slate-600 hover:bg-white hover:shadow-sm rounded-lg transition-all" title="Reset Zoom">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path></svg>
                                </button>
                                <div class="w-px h-4 bg-slate-300 mx-1"></div>
                                <button @click="fullScreen = !fullScreen" class="p-2 text-primary-600 hover:bg-primary-50 hover:shadow-sm rounded-lg transition-all" title="Full Screen">
                                    <svg x-show="!fullScreen" class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 8V4m0 0h4M4 4l5 5m11-1V4m0 0h-4m4 0l-5 5M4 16v4m0 0h4m-4 0l5-5m11 5l-5-5m5 5v-4m0 4h-4"></path></svg>
                                    <svg x-show="fullScreen" style="display: none;" class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                                </button>
                            </div>
                        </div>
                        
                        <!-- Pan & Zoom Container -->
                        <div class="overflow-auto flex-1 relative cursor-grab active:cursor-grabbing border border-slate-100 rounded-xl bg-slate-50/50" 
                             style="min-height: 300px;"
                             x-ref="container"
                             @mousedown="isDown = true; startX = $event.pageX - $refs.container.offsetLeft; scrollLeft = $refs.container.scrollLeft; startY = $event.pageY - $refs.container.offsetTop; scrollTop = $refs.container.scrollTop;"
                             @mouseleave="isDown = false"
                             @mouseup="isDown = false"
                             @mousemove="if(!isDown) return; $event.preventDefault(); const x = $event.pageX - $refs.container.offsetLeft; const walkX = (x - startX) * 1.5; $refs.container.scrollLeft = scrollLeft - walkX; const y = $event.pageY - $refs.container.offsetTop; const walkY = (y - startY) * 1.5; $refs.container.scrollTop = scrollTop - walkY;">
                             
                            <div :style="`transform: scale(${zoom}); transform-origin: top center; transition: transform 0.15s ease-out;`" class="flex justify-center p-8 min-w-max min-h-max">
                                @if($rules->count() > 0)
                                    <pre class="mermaid bg-transparent border-0 text-sm m-0">
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
                                    <div class="text-center py-8 text-gray-400 italic flex-1 flex items-center justify-center">Pohon keputusan kosong. Lakukan training model terlebih dahulu.</div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="mt-8 flex justify-start pb-8">
                <a href="{{ route('monitoring.index') }}" class="inline-flex items-center px-6 py-3 bg-white border border-slate-200 rounded-xl text-sm font-bold text-slate-700 hover:bg-slate-50 hover:text-primary-600 hover:border-primary-300 shadow-sm transition-all group">
                    <svg class="w-4 h-4 mr-2 group-hover:-translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
                    Kembali ke Monitoring
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
