<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-heading font-semibold text-xl text-slate-800 dark:text-slate-200 leading-tight">
                {{ __('Data Mahasiswa') }}
            </h2>
            @if(auth()->user()->role === 'admin')
            <div class="flex gap-2">
                <a href="{{ route('mahasiswa.create') }}" class="inline-flex items-center px-4 py-2 bg-white border border-slate-200 text-slate-700 hover:bg-slate-50 text-sm font-medium rounded-xl transition-colors shadow-sm">
                    <svg class="w-4 h-4 mr-2 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path></svg>
                    Tambah Mahasiswa
                </a>
                <button type="button" class="inline-flex items-center px-4 py-2 bg-white border border-slate-200 text-slate-700 hover:bg-slate-50 text-sm font-medium rounded-xl transition-colors shadow-sm">
                    <svg class="w-4 h-4 mr-2 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12"></path></svg>
                    Import Excel
                </button>
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

            <div class="bg-white overflow-hidden shadow-saas rounded-3xl border border-slate-100/50 mb-6 p-6 flex flex-col md:flex-row justify-between items-center gap-4">
                <form method="GET" action="{{ route('mahasiswa.index') }}" class="w-full md:w-1/2 relative">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <svg class="w-5 h-5 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                    </div>
                    <input type="text" name="search" value="{{ $search }}" class="pl-10 block w-full rounded-xl border-slate-200 shadow-sm focus:border-primary-500 focus:ring-primary-500 text-sm" placeholder="Cari Nama / NIM Mahasiswa...">
                </form>
            </div>

            <div class="bg-white overflow-hidden shadow-saas rounded-3xl border border-slate-100/50">
                <div class="overflow-x-auto">
                    <table class="w-full text-left border-collapse">
                        <thead>
                                <th class="py-4 px-6 font-semibold text-sm text-slate-500 text-center">No</th>
                                <th class="py-4 px-6 font-semibold text-sm text-slate-500">NPM</th>
                                <th class="py-4 px-6 font-semibold text-sm text-slate-500">Nama</th>
                                <th class="py-4 px-6 font-semibold text-sm text-slate-500 text-center">Angkatan</th>
                                <th class="py-4 px-6 font-semibold text-sm text-slate-500 text-center">IP Terakhir</th>
                                <th class="py-4 px-6 font-semibold text-sm text-slate-500 text-center">Kondisi Ekonomi</th>
                                <th class="py-4 px-6 font-semibold text-sm text-slate-500 text-center">Organisasi</th>
                                @if(auth()->user()->role === 'admin')
                                <th class="py-4 px-6 font-semibold text-sm text-slate-500 text-right">Aksi</th>
                                @endif
                        </thead>
                        <tbody class="divide-y divide-slate-100">
                            @forelse($mahasiswas as $mahasiswa)
                            <tr class="hover:bg-slate-50/50 transition-colors">
                                <td class="py-4 px-6 text-center text-slate-600">{{ $loop->iteration + $mahasiswas->firstItem() - 1 }}</td>
                                <td class="py-4 px-6 text-slate-600 font-medium">{{ $mahasiswa->nim }}</td>
                                <td class="py-4 px-6">
                                    <div class="font-medium text-slate-900">{{ $mahasiswa->nama }}</div>
                                </td>
                                <td class="py-4 px-6 text-center text-slate-600">{{ $mahasiswa->angkatan }}</td>
                                <td class="py-4 px-6 text-center text-slate-600">{{ $mahasiswa->dataTambahan->ip_terakhir ?? '-' }}</td>
                                <td class="py-4 px-6 text-center text-slate-600">
                                    @php
                                        $ekonomi = [1 => 'Sangat Kurang', 2 => 'Kurang', 3 => 'Sedang', 4 => 'Baik', 5 => 'Sangat Baik'];
                                        $val = $mahasiswa->dataTambahan->kondisi_ekonomi ?? null;
                                    @endphp
                                    {{ $val ? $ekonomi[$val] : '-' }}
                                </td>
                                <td class="py-4 px-6 text-center text-slate-600">
                                    @if(isset($mahasiswa->dataTambahan->keaktifan_organisasi))
                                        {{ $mahasiswa->dataTambahan->keaktifan_organisasi ? 'Aktif' : 'Tidak Aktif' }}
                                    @else
                                        -
                                    @endif
                                </td>
                                @if(auth()->user()->role === 'admin')
                                <td class="py-4 px-6 text-right space-x-2 whitespace-nowrap">
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
