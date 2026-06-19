<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center gap-4">
            <a href="{{ route('akademik.index') }}" class="p-2 text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-200 transition-colors bg-white dark:bg-gray-800 rounded-lg border border-gray-200 dark:border-gray-700 shadow-sm">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
            </a>
            <div>
                <h2 class="font-heading font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                    Data Akademik: {{ $mahasiswa->nama }}
                </h2>
                <p class="text-sm text-gray-500 dark:text-gray-400">NIM: {{ $mahasiswa->nim }} | Angkatan: {{ $mahasiswa->angkatan }}</p>
            </div>
        </div>
    </x-slot>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
        
        @if(auth()->user()->role === 'admin')
        <!-- Left: Form Tambah Semester -->
        <div class="lg:col-span-1">
            <div class="bg-white dark:bg-gray-800 shadow-sm rounded-2xl border border-gray-100 dark:border-gray-700 p-6">
                <h3 class="text-lg font-heading font-semibold text-gray-900 dark:text-white mb-4">Input Nilai Semester</h3>
                
                <form method="POST" action="{{ route('akademik.store', $mahasiswa->id) }}" class="space-y-4">
                    @csrf
                    
                    <div>
                        <x-input-label for="semester" value="Semester Ke-" />
                        <x-text-input id="semester" name="semester" type="number" class="mt-1 block w-full" :value="old('semester', $mahasiswa->dataAkademik->count() + 1)" required min="1" max="14" />
                        <x-input-error class="mt-2" :messages="$errors->get('semester')" />
                    </div>

                    <div>
                        <x-input-label for="ips" value="IPS (Indeks Prestasi Semester)" />
                        <x-text-input id="ips" name="ips" type="number" step="0.01" class="mt-1 block w-full" :value="old('ips')" required min="0" max="4" placeholder="Contoh: 3.50" />
                        <x-input-error class="mt-2" :messages="$errors->get('ips')" />
                    </div>

                    <div>
                        <x-input-label for="ipk" value="IPK Kumulatif" />
                        <x-text-input id="ipk" name="ipk" type="number" step="0.01" class="mt-1 block w-full" :value="old('ipk')" required min="0" max="4" placeholder="Contoh: 3.45" />
                        <x-input-error class="mt-2" :messages="$errors->get('ipk')" />
                    </div>

                    <div>
                        <x-input-label for="total_sks" value="Total SKS Kumulatif" />
                        <x-text-input id="total_sks" name="total_sks" type="number" class="mt-1 block w-full" :value="old('total_sks')" required min="0" max="160" placeholder="Contoh: 144" />
                        <x-input-error class="mt-2" :messages="$errors->get('total_sks')" />
                    </div>

                    <div class="pt-4">
                        <x-primary-button class="w-full justify-center py-2.5">
                            Simpan Data Semester
                        </x-primary-button>
                    </div>
                </form>
            </div>
        </div>
        @endif

        <!-- Right: Riwayat Semester -->
        <div class="{{ auth()->user()->role === 'admin' ? 'lg:col-span-2' : 'lg:col-span-3' }}">
            <div class="bg-white dark:bg-gray-800 shadow-sm rounded-2xl border border-gray-100 dark:border-gray-700 overflow-hidden">
                <div class="p-6 border-b border-gray-100 dark:border-gray-700">
                    <h3 class="text-lg font-heading font-semibold text-gray-900 dark:text-white">Riwayat Nilai</h3>
                </div>
                
                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                        <thead class="bg-gray-50 dark:bg-gray-900/50">
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-semibold text-gray-500 dark:text-gray-400 uppercase">Smt</th>
                                <th class="px-6 py-3 text-center text-xs font-semibold text-gray-500 dark:text-gray-400 uppercase">IPS</th>
                                <th class="px-6 py-3 text-center text-xs font-semibold text-gray-500 dark:text-gray-400 uppercase">IPK</th>
                                <th class="px-6 py-3 text-center text-xs font-semibold text-gray-500 dark:text-gray-400 uppercase">SKS Total</th>
                                @if(auth()->user()->role === 'admin')
                                <th class="px-6 py-3 text-right text-xs font-semibold text-gray-500 dark:text-gray-400 uppercase">Hapus</th>
                                @endif
                            </tr>
                        </thead>
                        <tbody class="bg-white dark:bg-gray-800 divide-y divide-gray-200 dark:divide-gray-700">
                            @forelse ($mahasiswa->dataAkademik as $akademik)
                                <tr class="hover:bg-gray-50 dark:hover:bg-gray-750">
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-semibold text-gray-900 dark:text-white">
                                        Semester {{ $akademik->semester }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-center font-medium {{ $akademik->ips >= 3.0 ? 'text-green-600 dark:text-green-400' : 'text-yellow-600 dark:text-yellow-400' }}">
                                        {{ number_format($akademik->ips, 2) }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-center text-gray-700 dark:text-gray-300">
                                        {{ number_format($akademik->ipk, 2) }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-center text-gray-700 dark:text-gray-300">
                                        {{ $akademik->total_sks }}
                                    </td>
                                    @if(auth()->user()->role === 'admin')
                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm">
                                        <form action="{{ route('akademik.destroy', $akademik->id) }}" method="POST" onsubmit="return confirm('Hapus data semester ini?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-red-600 hover:text-red-900 dark:text-red-400 dark:hover:text-red-300 p-1.5 hover:bg-red-50 dark:hover:bg-red-900/30 rounded-lg transition-colors">
                                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                                            </button>
                                        </form>
                                    </td>
                                    @endif
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5" class="px-6 py-8 text-center text-gray-500 dark:text-gray-400 text-sm">
                                        Belum ada data akademik yang diinputkan.
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
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
