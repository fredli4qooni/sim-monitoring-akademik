<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4">
            <h2 class="font-heading font-bold text-2xl text-primary-600 leading-tight">
                {{ __('Data Mahasiswa Aktif') }}
            </h2>
            @if(auth()->user()->role === 'admin')
            <div class="flex flex-wrap items-center gap-3">
                <a href="{{ route('mahasiswa.create') }}" class="inline-flex items-center justify-center px-4 py-2.5 bg-primary-600 hover:bg-primary-500 text-white text-sm font-medium rounded-xl transition-all shadow-sm transform hover:-translate-y-0.5 whitespace-nowrap">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path></svg>
                    Tambah Mahasiswa
                </a>

            </div>
            @endif
        </div>
    </x-slot>

    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            @if(session('success'))
            <div class="mb-6 p-4 bg-green-50 border border-green-200 text-green-700 rounded-2xl flex items-center">
                <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                {{ session('success') }}
            </div>
            @endif

            <div class="bg-white/50 backdrop-blur-xl overflow-hidden shadow-saas rounded-3xl border border-slate-100/50 mb-6 p-6 flex flex-col md:flex-row justify-between items-center gap-4">
                <form method="GET" action="{{ route('mahasiswa.index') }}" class="w-full md:w-1/2 relative group">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <svg class="w-5 h-5 text-slate-400 group-focus-within:text-primary-500 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                    </div>
                    <input type="text" name="search" value="{{ $search }}" class="pl-10 block w-full py-2.5 rounded-xl border-slate-200 shadow-sm focus:border-primary-500 focus:ring-primary-500 text-sm transition-shadow focus:shadow-md focus:shadow-primary-500/10" placeholder="Cari Nama / NPM Mahasiswa...">
                </form>
            </div>

            <div class="bg-white overflow-hidden shadow-saas rounded-3xl border border-slate-100/50">
                <div class="overflow-x-auto">
                    <table class="w-full text-left border-collapse">
                        <thead>
                            <tr class="bg-slate-50/50">
                                <th class="py-4 px-6 whitespace-nowrap font-semibold text-sm text-slate-500 text-center">No</th>
                                <th class="py-4 px-6 whitespace-nowrap font-semibold text-sm text-slate-500">NPM</th>
                                <th class="py-4 px-6 whitespace-nowrap font-semibold text-sm text-slate-500">Nama Lengkap</th>
                                <th class="py-4 px-6 whitespace-nowrap font-semibold text-sm text-slate-500 text-center">Angkatan</th>
                                <th class="py-4 px-6 whitespace-nowrap font-semibold text-sm text-slate-500 text-center">IP Terakhir</th>
                                <th class="py-4 px-6 whitespace-nowrap font-semibold text-sm text-slate-500 text-center">Kondisi Ekonomi</th>
                                <th class="py-4 px-6 whitespace-nowrap font-semibold text-sm text-slate-500 text-center">Organisasi</th>
                                @if(auth()->user()->role === 'admin')
                                <th class="py-4 px-6 whitespace-nowrap font-semibold text-sm text-slate-500 text-center">Aksi</th>
                                @endif
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-100">
                            @forelse($mahasiswas as $mahasiswa)
                            <tr class="hover:bg-slate-50 dark:hover:bg-slate-750 transition-all duration-200 group">
                                <td class="py-4 px-6 whitespace-nowrap text-center text-slate-500 group-hover:text-primary-600 transition-colors">{{ $loop->iteration + $mahasiswas->firstItem() - 1 }}</td>
                                <td class="py-4 px-6 whitespace-nowrap text-slate-600 font-medium">{{ $mahasiswa->nim }}</td>
                                <td class="py-4 px-6 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0 h-8 w-8 rounded-full bg-primary-100 flex items-center justify-center text-primary-700 font-bold text-xs shadow-sm">
                                            {{ substr($mahasiswa->nama, 0, 1) }}
                                        </div>
                                        <div class="ml-3 font-semibold text-slate-900">{{ $mahasiswa->nama }}</div>
                                    </div>
                                </td>
                                <td class="py-4 px-6 whitespace-nowrap text-center text-slate-600">
                                    <span class="px-2.5 py-1 bg-slate-100 text-slate-600 rounded-md font-medium text-xs">{{ $mahasiswa->angkatan }}</span>
                                </td>
                                <td class="py-4 px-6 whitespace-nowrap text-center text-slate-600">{{ $mahasiswa->dataTambahan->ip_terakhir ?? '-' }}</td>
                                <td class="py-4 px-6 whitespace-nowrap text-center text-slate-600">
                                    {{ $mahasiswa->dataTambahan->kondisi_ekonomi ?? '-' }}
                                </td>
                                <td class="py-4 px-6 whitespace-nowrap text-center text-slate-600">
                                    {{ $mahasiswa->dataTambahan->keaktifan_organisasi ?? '-' }}
                                </td>
                                @if(auth()->user()->role === 'admin')
                                <td class="py-4 px-6 text-center space-x-2 whitespace-nowrap flex justify-center items-center">
                                    <a href="{{ route('mahasiswa.edit', $mahasiswa->id) }}" class="inline-flex items-center justify-center px-3 py-1.5 rounded-lg border border-slate-200 bg-white text-slate-600 hover:bg-slate-50 hover:text-primary-600 transition-colors text-xs font-medium" title="Edit Data">
                                        Edit
                                    </a>
                                    
                                    <form action="{{ route('mahasiswa.destroy', $mahasiswa->id) }}" method="POST" class="inline-block" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="inline-flex items-center justify-center px-3 py-1.5 rounded-lg border border-slate-200 bg-white text-slate-600 hover:bg-red-50 hover:text-red-600 transition-colors text-xs font-medium" title="Hapus Data">
                                            Hapus
                                        </button>
                                    </form>
                                </td>
                                @endif
                            </tr>
                            @empty
                            <tr>
                                <td colspan="8" class="py-8 px-6 text-center text-slate-500">
                                    Tidak ada data mahasiswa yang ditemukan.
                                </td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
            
            @if($mahasiswas->hasPages())
            <div class="mt-4 px-6 py-4 bg-white rounded-2xl shadow-sm border border-slate-100">
                {{ $mahasiswas->withQueryString()->links() }}
            </div>
            @endif

        </div>
    </div>
</x-app-layout>
