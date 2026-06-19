<!-- Sidebar Backdrop for Mobile -->
<div x-show="sidebarOpen" class="fixed inset-0 z-20 bg-gray-900/50 backdrop-blur-sm lg:hidden transition-opacity" @click="sidebarOpen = false" x-transition.opacity></div>

<!-- Sidebar -->
<aside :class="sidebarOpen ? 'translate-x-0' : '-translate-x-full'" class="fixed inset-y-0 left-0 z-30 w-72 bg-white dark:bg-gray-800 border-r border-slate-100/60 dark:border-gray-700 transition-all duration-300 lg:static lg:translate-x-0 flex flex-col shadow-xl lg:shadow-none">
    
    <!-- Sidebar Header / Branding -->
    <div class="flex items-center px-6 h-20 border-b border-slate-100 shrink-0">
        <a href="{{ route('dashboard') }}" class="flex items-center gap-3">
            <div class="inline-flex items-center justify-center w-10 h-10 rounded-xl bg-primary-50 text-primary-600">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.362 5.214A8.252 8.252 0 0112 21 8.25 8.25 0 016.038 7.048 8.287 8.287 0 009 9.6a8.983 8.983 0 013.361-6.867 8.21 8.21 0 003 2.48z" />
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 18a3.75 3.75 0 00.495-7.467 5.99 5.99 0 00-1.925 3.546 5.974 5.974 0 01-2.133-1A3.75 3.75 0 0012 18z" />
                </svg>
            </div>
            <span class="text-xl font-heading font-extrabold text-slate-900 tracking-tight">SPK <span class="text-primary-600">UIN RIL</span></span>
        </a>
    </div>

    <!-- Sidebar Navigation Links -->
    <nav class="flex-1 px-4 py-6 space-y-1.5 overflow-y-auto">
        
        @if(auth()->user()->role !== 'mahasiswa')
        <!-- Dashboard Link -->
        <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" >
            <svg class="w-5 h-5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path></svg>
            Dashboard
        </x-nav-link>

        <div class="pt-4 pb-2">
            <span class="px-3 text-xs font-semibold text-gray-500 uppercase tracking-wider dark:text-gray-400">Manajemen Data</span>
        </div>



        <!-- Data Akademik Link -->
        <x-nav-link :href="route('akademik.index')" :active="request()->routeIs('akademik.*')" >
            <svg class="w-5 h-5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
            Data Akademik
        </x-nav-link>

        @if(auth()->user()->role === 'admin')
        <!-- Mahasiswa Link -->
        <x-nav-link :href="route('mahasiswa.index')" :active="request()->routeIs('mahasiswa.*') || request()->routeIs('akademik.*') || request()->routeIs('tambahan.*')">
            <svg class="w-5 h-5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
            Data Mahasiswa
        </x-nav-link>
        @else
        <!-- Mahasiswa Link (Read-Only Kaprodi) -->
        <x-nav-link :href="route('mahasiswa.index')" :active="request()->routeIs('mahasiswa.*') || request()->routeIs('akademik.*')">
            <svg class="w-5 h-5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
            Data Mahasiswa
        </x-nav-link>
        @endif

        <div class="pt-4 pb-2">
            <span class="px-3 text-xs font-semibold text-gray-500 uppercase tracking-wider dark:text-gray-400">Monitoring & SPK</span>
        </div>

        <!-- Prediksi Link -->
        <x-nav-link :href="route('monitoring.index')" :active="request()->routeIs('monitoring.*')" >
            <svg class="w-5 h-5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
            Prediksi Kelulusan
        </x-nav-link>

        @if(auth()->user()->role === 'admin')
        <div class="pt-4 pb-2">
            <span class="px-3 text-xs font-semibold text-slate-500 uppercase tracking-wider">Machine Learning</span>
        </div>

        <!-- C4.5 Engine Link -->
        <x-nav-link :href="route('ml.index')" :active="request()->routeIs('ml.*')">
            <svg class="w-5 h-5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
            C4.5 Engine
        </x-nav-link>
        @endif

        <!-- Laporan Link -->
        <x-nav-link :href="route('report.index')" :active="request()->routeIs('report.*')">
            <svg class="w-5 h-5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 17h2a2 2 0 002-2v-4a2 2 0 00-2-2H5a2 2 0 00-2 2v4a2 2 0 002 2h2m2 4h6a2 2 0 002-2v-4a2 2 0 00-2-2H9a2 2 0 00-2 2v4a2 2 0 002 2zm8-12V5a2 2 0 00-2-2H9a2 2 0 00-2 2v4h10z"></path></svg>
            Laporan Analisis
        </x-nav-link>

        @if(auth()->user()->role === 'admin')
        <div class="pt-4 pb-2">
            <span class="px-3 text-xs font-semibold text-slate-500 uppercase tracking-wider">Sistem</span>
        </div>

        <!-- Manajemen Pengguna Link -->
        <x-nav-link :href="route('users.index')" :active="request()->routeIs('users.*')">
            <svg class="w-5 h-5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
            Manajemen Pengguna
        </x-nav-link>

        <!-- Pengaturan Link -->
        <x-nav-link :href="route('settings.index')" :active="request()->routeIs('settings.*') || request()->routeIs('profile.*')">
            <svg class="w-5 h-5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
            Pengaturan
        </x-nav-link>
        @else
        <div class="pt-4 pb-2">
            <span class="px-3 text-xs font-semibold text-slate-500 uppercase tracking-wider">Sistem</span>
        </div>
        @endif
        
        @else
        <!-- Dashboard Mahasiswa Link -->
        <x-nav-link :href="route('mahasiswa.dashboard')" :active="request()->routeIs('mahasiswa.dashboard')" >
            <svg class="w-5 h-5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
            Dasbor Akademik
        </x-nav-link>

        <div class="pt-4 pb-2">
            <span class="px-3 text-xs font-semibold text-slate-500 uppercase tracking-wider">Akun Saya</span>
        </div>
        @endif

        @if(auth()->user()->role !== 'admin')
        <!-- Profile Link (Umum) -->
        <x-nav-link :href="route('profile.edit')" :active="request()->routeIs('profile.*')">
            <svg class="w-5 h-5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
            Profil Akun
        </x-nav-link>
        @endif
    </nav>

    <!-- Sidebar Footer / Logout -->
    <div class="border-t border-gray-200 dark:border-gray-700 p-4">
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <a href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();" >
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path></svg>
                Log Out
            </a>
        </form>
    </div>
</aside>

