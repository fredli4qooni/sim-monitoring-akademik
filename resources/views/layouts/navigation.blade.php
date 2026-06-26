<!-- Sidebar Backdrop for Mobile -->
<div x-show="sidebarOpen" class="fixed inset-0 z-20 bg-gray-900/50 backdrop-blur-sm lg:hidden transition-opacity" @click="sidebarOpen = false" x-transition.opacity></div>

<!-- Sidebar -->
<aside :class="sidebarOpen ? 'translate-x-0' : '-translate-x-full'" class="fixed inset-y-0 left-0 z-30 w-72 bg-white dark:bg-gray-800 border-r border-slate-100/60 dark:border-gray-700 transition-all duration-300 lg:static lg:translate-x-0 flex flex-col shadow-xl lg:shadow-none">
    
    <!-- Sidebar Header / Branding -->
    <div class="flex items-center px-6 h-20 border-b border-slate-100 shrink-0">
        <a href="{{ route('dashboard') }}" class="flex items-center gap-3">
            <div class="h-16 flex items-center border-b border-slate-100 bg-white/50 backdrop-blur-xl">
                @php
                    $appLogo = \App\Models\Setting::where('key', 'app_logo')->value('value');
                @endphp
                @if($appLogo)
                    <img src="{{ asset('storage/' . $appLogo) }}" alt="Logo" class="w-8 h-8 object-contain">
                @else
                    <div class="inline-flex items-center justify-center w-10 h-10 rounded-xl bg-primary-50 text-primary-600">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.362 5.214A8.252 8.252 0 0112 21 8.25 8.25 0 016.038 7.048 8.287 8.287 0 009 9.6a8.983 8.983 0 013.361-6.867 8.21 8.21 0 003 2.48z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 18a3.75 3.75 0 00.495-7.467 5.99 5.99 0 00-1.925 3.546 5.974 5.974 0 01-2.133-1A3.75 3.75 0 0012 18z" />
                        </svg>
                    </div>
                @endif
                <span class="ml-3 text-xl font-heading font-extrabold text-slate-900 tracking-tight">{{ \App\Models\Setting::where('key', 'app_name')->value('value') ?? 'SPK UIN RIL' }}</span>
            </div>
        </a>
    </div>

    <!-- Sidebar Navigation Links -->
    <nav class="flex-1 px-4 py-6 space-y-1.5 overflow-y-auto">
        

        <div class="pt-2 pb-1">
            <span class="px-3 text-xs font-semibold text-slate-400 dark:text-slate-500 uppercase tracking-wider">Utama</span>
        </div>
        <!-- Dashboard Link -->
        <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" >
            <svg class="w-5 h-5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path></svg>
            Dashboard
        </x-nav-link>

        <div class="pt-4 pb-1">
            <span class="px-3 text-xs font-semibold text-slate-400 dark:text-slate-500 uppercase tracking-wider">Manajemen Data</span>
        </div>

        @if(auth()->user()->role === 'admin')
        <!-- Data Latih Link -->
        <x-nav-link :href="route('data-latih.index')" :active="request()->routeIs('data-latih.*')">
            <svg class="w-5 h-5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
            Data Latih
        </x-nav-link>
        @endif

        <!-- Data Mahasiswa Link -->
        <x-nav-link :href="route('mahasiswa.index')" :active="request()->routeIs('mahasiswa.*')">
            <svg class="w-5 h-5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
            Data Mahasiswa
        </x-nav-link>

        <!-- Prediksi Link -->
        <div class="pt-4 pb-1">
            <span class="px-3 text-xs font-semibold text-slate-400 dark:text-slate-500 uppercase tracking-wider">Analisis & AI</span>
        </div>
        <x-nav-link :href="route('monitoring.index')" :active="request()->routeIs('monitoring.*') || request()->routeIs('ml.*')" >
            <svg class="w-5 h-5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
            Prediksi
        </x-nav-link>

        <!-- Laporan Link -->
        <x-nav-link :href="route('report.index')" :active="request()->routeIs('report.*')">
            <svg class="w-5 h-5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 17h2a2 2 0 002-2v-4a2 2 0 00-2-2H5a2 2 0 00-2 2v4a2 2 0 002 2h2m2 4h6a2 2 0 002-2v-4a2 2 0 00-2-2H9a2 2 0 00-2 2v4a2 2 0 002 2zm8-12V5a2 2 0 00-2-2H9a2 2 0 00-2 2v4h10z"></path></svg>
            Laporan
        </x-nav-link>

        @if(auth()->user()->role === 'admin')
        <div class="pt-4 pb-1">
            <span class="px-3 text-xs font-semibold text-slate-400 dark:text-slate-500 uppercase tracking-wider">Sistem</span>
        </div>
        <!-- Pengaturan Link (Settings, Parameters, Users) -->
        <x-nav-link :href="route('settings.index')" :active="request()->routeIs('settings.*') || request()->routeIs('parameters.*') || request()->routeIs('users.*') || request()->routeIs('profile.*')">
            <svg class="w-5 h-5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
            Pengaturan
        </x-nav-link>
        @endif
        
        <!-- Profile Link (Umum) -->
        <x-nav-link :href="route('profile.edit')" :active="request()->routeIs('profile.*')">
            <svg class="w-5 h-5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
            Profil Akun
        </x-nav-link>
    </nav>

    <!-- Sidebar Footer / Logout -->
    <div class="border-t border-slate-100 dark:border-gray-700 p-4 mt-auto">
        <form method="POST" action="{{ route('logout') }}" class="w-full">
            @csrf
            <button type="submit" class="flex items-center gap-3 w-full px-4 py-3 text-sm font-semibold text-red-600 dark:text-red-400 bg-red-50 hover:bg-red-100 dark:bg-red-900/10 dark:hover:bg-red-900/30 rounded-xl transition-all duration-200 group focus:outline-none focus:ring-2 focus:ring-red-500/50">
                <div class="p-1.5 rounded-lg bg-red-100 dark:bg-red-900/50 text-red-600 dark:text-red-400 group-hover:bg-red-200 dark:group-hover:bg-red-900/80 transition-colors">
                    <svg class="w-4 h-4 transition-transform duration-300 group-hover:-translate-x-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path></svg>
                </div>
                <span>Keluar Aplikasi</span>
            </button>
        </form>
    </div>
</aside>

