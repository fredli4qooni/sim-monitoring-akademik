<x-app-layout>
    <x-slot name="header">
        <h2 class="font-heading font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Machine Learning Engine (C4.5 Decision Tree)') }}
        </h2>
    </x-slot>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
        <!-- Status Card -->
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm rounded-2xl border border-gray-100 dark:border-gray-700">
            <div class="p-6">
                <div class="flex items-center justify-between mb-4">
                    <h3 class="text-lg font-heading font-semibold text-gray-800 dark:text-gray-200">Status Model C4.5</h3>
                    <div class="p-2 bg-primary-100 dark:bg-primary-900/30 rounded-lg text-primary-600 dark:text-primary-400">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path></svg>
                    </div>
                </div>
                
                <div class="grid grid-cols-2 gap-4">
                    <div class="p-4 bg-gray-50 dark:bg-gray-750 rounded-xl border border-gray-100 dark:border-gray-700">
                        <p class="text-sm text-gray-500 dark:text-gray-400">Total Data Training</p>
                        <p class="text-2xl font-bold text-gray-900 dark:text-white mt-1">{{ $totalTrainingData }} <span class="text-xs font-normal text-gray-500">Mahasiswa</span></p>
                    </div>
                    <div class="p-4 bg-gray-50 dark:bg-gray-750 rounded-xl border border-gray-100 dark:border-gray-700">
                        <p class="text-sm text-gray-500 dark:text-gray-400">Pohon Keputusan</p>
                        <p class="text-2xl font-bold text-gray-900 dark:text-white mt-1">{{ $rulesCount }} <span class="text-xs font-normal text-gray-500">Node / Aturan</span></p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Action Card -->
        <div class="bg-gradient-to-br from-primary-600 to-primary-800 overflow-hidden shadow-sm rounded-2xl relative text-white">
            <!-- Dekorasi background -->
            <div class="absolute top-0 right-0 -mr-8 -mt-8 w-32 h-32 rounded-full bg-white opacity-10"></div>
            <div class="absolute bottom-0 left-0 -ml-8 -mb-8 w-24 h-24 rounded-full bg-white opacity-10"></div>
            
            <div class="p-6 relative z-10 h-full flex flex-col justify-between">
                <div>
                    <h3 class="text-xl font-heading font-bold mb-2">Training Model Baru</h3>
                    <p class="text-primary-100 text-sm opacity-90 leading-relaxed">
                        Sistem akan mengumpulkan seluruh data historis mahasiswa, mendiskritkan variabel numerik, lalu menghitung Entropy, Split Info, & Gain Ratio untuk membangun struktur Pohon Keputusan C4.5 murni yang baru.
                    </p>
                </div>
                
                <form action="{{ route('ml.train') }}" method="POST" class="mt-6" onsubmit="return confirm('Proses ini akan menghapus rules lama dan membangun pohon keputusan baru berdasarkan data terbaru. Lanjutkan?');">
                    @csrf
                    <button type="submit" class="w-full sm:w-auto inline-flex items-center justify-center px-6 py-3 border border-transparent rounded-xl shadow-sm text-sm font-semibold text-primary-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500 transition-all duration-200">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path></svg>
                        Mulai Proses Training (Retrain)
                    </button>
                </form>
            </div>
        </div>
    </div>

    <!-- Rule Tree List -->
    <div class="bg-white dark:bg-gray-800 shadow-sm rounded-2xl border border-gray-100 dark:border-gray-700 overflow-hidden">
        <div class="p-6 border-b border-gray-100 dark:border-gray-700 flex justify-between items-center">
            <h3 class="text-lg font-heading font-semibold text-gray-900 dark:text-white">Struktur Aturan (Decision Tree)</h3>
        </div>
        
        <div class="p-6 overflow-x-auto">
            @if($rules->count() > 0)
                <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700 text-sm">
                    <thead>
                        <tr>
                            <th class="px-4 py-2 text-left font-semibold text-gray-500">Node ID</th>
                            <th class="px-4 py-2 text-left font-semibold text-gray-500">Parent</th>
                            <th class="px-4 py-2 text-left font-semibold text-gray-500">Kondisi (Cabang)</th>
                            <th class="px-4 py-2 text-left font-semibold text-gray-500">Atribut Uji</th>
                            <th class="px-4 py-2 text-left font-semibold text-gray-500">Label Kesimpulan</th>
                            <th class="px-4 py-2 text-left font-semibold text-gray-500">Metrik (GR / G / SI / E)</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-100 dark:divide-gray-700">
                        @foreach($rules as $rule)
                            <tr class="hover:bg-gray-50 dark:hover:bg-gray-750">
                                <td class="px-4 py-3 font-medium text-gray-900 dark:text-white">#{{ $rule->id }}</td>
                                <td class="px-4 py-3 text-gray-500 dark:text-gray-400">{{ $rule->parent_node ? '#'.$rule->parent_node : 'Root' }}</td>
                                <td class="px-4 py-3 text-primary-600 dark:text-primary-400 font-medium">
                                    {{ $rule->condition ?? '-' }}
                                </td>
                                <td class="px-4 py-3 text-gray-700 dark:text-gray-300">
                                    {{ $rule->attribute ? strtoupper($rule->attribute) : '-' }}
                                </td>
                                <td class="px-4 py-3">
                                    @if($rule->label)
                                        <span class="px-2.5 py-1 rounded-full text-xs font-semibold {{ $rule->label == 'Tepat Waktu' ? 'bg-green-100 text-green-800 dark:bg-green-900/30 dark:text-green-400' : 'bg-red-100 text-red-800 dark:bg-red-900/30 dark:text-red-400' }}">
                                            {{ $rule->label }}
                                        </span>
                                    @else
                                        <span class="text-gray-400 italic">Lanjut Cabang</span>
                                    @endif
                                </td>
                                <td class="px-4 py-3 text-xs text-gray-500">
                                    GR: <span class="font-bold text-primary-600 dark:text-primary-400">{{ number_format($rule->gain_ratio, 4) }}</span><br>
                                    <span class="text-gray-400">G: {{ number_format($rule->gain, 4) }} | SI: {{ number_format($rule->split_info, 4) }} | E: {{ number_format($rule->entropy, 4) }}</span>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                <div class="text-center py-10">
                    <svg class="mx-auto h-12 w-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path></svg>
                    <p class="mt-4 text-gray-500">Model belum di-training. Silakan klik tombol "Mulai Proses Training" di atas.</p>
                </div>
            @endif
        </div>
    </div>

    <!-- Error/Success Alerts (Alpine.js) -->
    @if(session('success'))
        <div x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 4000)" class="fixed bottom-4 right-4 z-50 animate-slide-up">
            <div class="bg-gray-900 text-white px-6 py-4 rounded-xl shadow-lg flex items-center gap-3">
                <div class="bg-green-500/20 text-green-400 p-2 rounded-full">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                </div>
                <span class="font-medium">{{ session('success') }}</span>
            </div>
        </div>
    @endif

    @if($errors->any())
        <div x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 5000)" class="fixed bottom-4 right-4 z-50 animate-slide-up">
            <div class="bg-red-900 text-white px-6 py-4 rounded-xl shadow-lg flex items-center gap-3">
                <div class="bg-red-500/20 text-red-400 p-2 rounded-full">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                </div>
                <span class="font-medium">{{ $errors->first() }}</span>
            </div>
        </div>
    @endif
</x-app-layout>
