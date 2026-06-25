<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\TambahanController;
use App\Http\Controllers\MachineLearningController;
use App\Http\Controllers\MonitoringController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\ParameterController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('login');
});

Route::middleware(['auth', 'verified'])->group(function () {
    // Redirect pintar untuk dashboard
    Route::get('/dashboard', function () {
        if (auth()->user()->role === 'mahasiswa') {
            return redirect()->route('mahasiswa.dashboard');
        }
        return app(DashboardController::class)->index();
    })->name('dashboard');

    // Rute yang dapat diakses oleh Admin & Kaprodi
    Route::middleware(['role:admin,prodi'])->group(function () {
        Route::get('mahasiswa', [MahasiswaController::class, 'index'])->name('mahasiswa.index');

        Route::get('monitoring', [MonitoringController::class, 'index'])->name('monitoring.index');
        Route::get('report', [ReportController::class, 'index'])->name('report.index');
        Route::get('report/pdf', [ReportController::class, 'downloadPdf'])->name('report.pdf');
    });

    // Profile (Umum)
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Routes khusus Admin
    Route::middleware(['role:admin'])->group(function () {
        Route::resource('mahasiswa', MahasiswaController::class)->except(['show', 'index']);
        
        // Manajemen Pengguna
        Route::resource('users', \App\Http\Controllers\UserController::class);
        
        Route::get('/tambahan', [TambahanController::class, 'index'])->name('tambahan.index');
        Route::get('/tambahan/{mahasiswa}/edit', [TambahanController::class, 'edit'])->name('tambahan.edit');
        Route::post('/tambahan/{mahasiswa}', [TambahanController::class, 'update'])->name('tambahan.update');
        
        Route::get('/machine-learning', [MachineLearningController::class, 'index'])->name('ml.index');
        Route::post('/machine-learning/train', [MachineLearningController::class, 'train'])->name('ml.train');
        
        // Parameter C4.5
        Route::get('/parameters', [ParameterController::class, 'index'])->name('parameters.index');
        Route::post('/parameters', [ParameterController::class, 'update'])->name('parameters.update');

        // Settings
        Route::get('/settings', [SettingController::class, 'index'])->name('settings.index');
        Route::post('/settings', [SettingController::class, 'update'])->name('settings.update');
    });

    // Routes khusus Mahasiswa
    Route::middleware(['role:mahasiswa'])->group(function () {
        Route::get('/mhs/dashboard', [App\Http\Controllers\MahasiswaDashboardController::class, 'index'])->name('mahasiswa.dashboard');
    });
}); 

require __DIR__.'/auth.php';
