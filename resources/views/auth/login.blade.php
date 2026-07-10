<x-guest-layout>
    <!-- Wrapper for Boxed Layout -->
    <div class="min-h-screen flex items-center justify-center p-4 sm:p-8">
        
        <!-- Main Card -->
        <div class="flex w-full max-w-6xl bg-white rounded-3xl shadow-saas overflow-hidden border border-slate-100/50">
            
            <!-- Left Side: Branding/Image -->
            <div class="hidden lg:flex lg:w-1/2 relative bg-slate-50/50 items-center justify-center p-12">
                <div class="relative z-10 text-center animate-fade-in w-full">
                    <!-- Illustration -->
                    <div class="mb-6">
                        <img src="{{ asset('images/ilustrasi.png') }}" alt="Ilustrasi SPK" class="w-full max-w-sm mx-auto object-contain drop-shadow-sm hover:scale-105 transition-transform duration-500">
                    </div>

                    <h1 class="text-3xl font-heading font-bold text-slate-900 mb-3 tracking-tight">Sistem Monitoring Kinerja Akademik Mahasiswa</h1>
                    <p class="text-base text-slate-500 font-light max-w-md mx-auto leading-relaxed">
                        Sistem Pendukung Keputusan cerdas berbasis Decision Tree C4.5 untuk memonitor dan memprediksi kelulusan mahasiswa UIN Raden Intan Lampung.
                    </p>
                </div>
            </div>

            <!-- Right Side: Login Form -->
            <div class="flex-1 flex flex-col justify-center p-8 sm:p-12 lg:p-16 bg-white animate-slide-up">
                <div class="mx-auto w-full max-w-md" x-data="{ tab: 'mahasiswa' }">
                <!-- Mobile Logo -->
                <div class="lg:hidden mb-8 text-center">
                    <div class="inline-flex items-center justify-center w-16 h-16 rounded-xl bg-primary-100 dark:bg-primary-900/50 text-primary-600 dark:text-primary-400 mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.362 5.214A8.252 8.252 0 0112 21 8.25 8.25 0 016.038 7.048 8.287 8.287 0 009 9.6a8.983 8.983 0 013.361-6.867 8.21 8.21 0 003 2.48z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 18a3.75 3.75 0 00.495-7.467 5.99 5.99 0 00-1.925 3.546 5.974 5.974 0 01-2.133-1A3.75 3.75 0 0012 18z" />
                        </svg>
                    </div>
                    <h2 class="text-2xl font-heading font-bold text-gray-900 dark:text-white">Sistem Monitoring Kinerja Akademik Mahasiswa</h2>
                </div>

                <div class="mb-6">
                    <h2 class="text-3xl font-heading font-bold text-gray-900 dark:text-white tracking-tight">Selamat Datang</h2>
                    <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">
                        Silakan login untuk mengakses sistem monitoring akademik.
                    </p>
                </div>

                <!-- Tab Toggle -->
                <div class="flex p-1 space-x-1 bg-gray-100 dark:bg-gray-800/50 rounded-xl mb-6">
                    <button type="button" @click="tab = 'mahasiswa'" 
                        :class="tab === 'mahasiswa' ? 'bg-white dark:bg-gray-700 text-primary-600 dark:text-primary-400 shadow-sm' : 'text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-200'"
                        class="w-full rounded-lg py-2.5 text-sm font-semibold leading-5 transition-all">
                        Login Mahasiswa
                    </button>
                    <button type="button" @click="tab = 'admin'"
                        :class="tab === 'admin' ? 'bg-white dark:bg-gray-700 text-primary-600 dark:text-primary-400 shadow-sm' : 'text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-200'"
                        class="w-full rounded-lg py-2.5 text-sm font-semibold leading-5 transition-all">
                        Kaprodi / Admin
                    </button>
                </div>

                <!-- Peringatan Akses -->
                <div x-show="tab === 'admin'" style="display: none;" class="mb-6 p-4 rounded-xl bg-amber-50 dark:bg-amber-900/20 border border-amber-200 dark:border-amber-800 text-amber-800 dark:text-amber-400 text-sm flex items-start gap-3">
                    <svg class="w-5 h-5 shrink-0 mt-0.5 text-amber-600 dark:text-amber-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    <div>
                        <span class="font-bold block mb-0.5 text-amber-900 dark:text-amber-300">Area Terbatas</span>
                        Portal ini khusus untuk <strong>Admin</strong> dan <strong>Kaprodi</strong>. 
                    </div>
                </div>

                <x-auth-session-status class="mb-4" :status="session('status')" />

                <form method="POST" action="{{ route('login') }}" class="space-y-6">
                    @csrf
                    <input type="hidden" name="login_type" :value="tab">

                    <!-- NPM (Mahasiswa) -->
                    <div x-show="tab === 'mahasiswa'">
                        <label for="npm" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Nomor Pokok Mahasiswa (NPM)</label>
                        <div class="mt-1 relative rounded-md shadow-sm">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 21h7a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v11m0 5l4.879-4.879m0 0a3 3 0 104.243-4.242 3 3 0 00-4.243 4.242z"></path></svg>
                            </div>
                            <input id="npm" type="text" name="npm" value="{{ old('npm') }}" autocomplete="username" :required="tab === 'mahasiswa'"
                                class="block w-full pl-10 pr-3 py-2 border border-gray-300 dark:border-gray-700 rounded-lg focus:ring-primary-500 focus:border-primary-500 sm:text-sm bg-white dark:bg-gray-800 text-gray-900 dark:text-white placeholder-gray-400 dark:placeholder-gray-500 transition duration-150 ease-in-out shadow-sm" placeholder="Masukkan NPM Anda">
                        </div>
                        <x-input-error :messages="$errors->get('npm')" class="mt-2" />
                    </div>

                    <!-- Email Address (Admin) -->
                    <div x-show="tab === 'admin'" style="display: none;">
                        <label for="email" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Email Kampus</label>
                        <div class="mt-1 relative rounded-md shadow-sm">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                  <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                                  <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                                </svg>
                            </div>
                            <input id="email" type="email" name="email" value="{{ old('email') }}" autocomplete="username" :required="tab === 'admin'"
                                class="block w-full pl-10 pr-3 py-2 border border-gray-300 dark:border-gray-700 rounded-lg focus:ring-primary-500 focus:border-primary-500 sm:text-sm bg-white dark:bg-gray-800 text-gray-900 dark:text-white placeholder-gray-400 dark:placeholder-gray-500 transition duration-150 ease-in-out shadow-sm" placeholder="admin@uinril.ac.id">
                        </div>
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <!-- Password -->
                    <div x-data="{ showPassword: false }">
                        <label for="password" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Password</label>
                        <div class="mt-1 relative rounded-md shadow-sm">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd" />
                                </svg>
                            </div>
                            <input id="password" :type="showPassword ? 'text' : 'password'" name="password" required autocomplete="current-password"
                                class="block w-full pl-10 pr-12 py-2 border border-gray-300 dark:border-gray-700 rounded-lg focus:ring-primary-500 focus:border-primary-500 sm:text-sm bg-white dark:bg-gray-800 text-gray-900 dark:text-white placeholder-gray-400 dark:placeholder-gray-500 transition duration-150 ease-in-out shadow-sm" placeholder="••••••••">
                            
                            <!-- Toggle Button -->
                            <div class="absolute inset-y-0 right-0 pr-3 flex items-center">
                                <button type="button" @click="showPassword = !showPassword" class="text-gray-400 hover:text-gray-600 focus:outline-none transition-colors">
                                    <svg x-show="!showPassword" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                    </svg>
                                    <svg x-show="showPassword" style="display: none;" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.542-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <!-- Remember Me -->
                    <div class="flex items-center">
                        <input id="remember_me" type="checkbox" name="remember" class="h-4 w-4 text-primary-600 focus:ring-primary-500 border-gray-300 rounded dark:bg-gray-800 dark:border-gray-700">
                        <label for="remember_me" class="ml-2 block text-sm text-gray-700 dark:text-gray-300">
                            Ingat saya
                        </label>
                    </div>

                    <div>
                        <button type="submit" class="w-full flex justify-center py-2.5 px-4 border border-transparent rounded-lg shadow-sm text-sm font-medium text-white bg-primary-600 hover:bg-primary-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500 transition duration-150 ease-in-out transform hover:-translate-y-0.5">
                            Masuk ke Sistem
                        </button>
                    </div>
                </form>
                
                <div class="mt-8 text-center text-xs text-gray-500">
                    &copy; {{ date('Y') }} Program Studi Sistem Informasi<br>UIN Raden Intan Lampung
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
