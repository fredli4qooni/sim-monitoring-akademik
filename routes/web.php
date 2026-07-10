<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\DataLatihController;
use App\Http\Controllers\MachineLearningController;
use App\Http\Controllers\MonitoringController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\ParameterController;
use Illuminate\Support\Facades\Route;

// Redirect halaman utama ke login
Route::get('/', function () {
    return redirect()->route('login');
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/cek-prediksi', [App\Http\Controllers\PublicPredictionController::class, 'index'])->name('cek-prediksi');
    Route::post('/cek-prediksi', [App\Http\Controllers\PublicPredictionController::class, 'check'])->name('cek-prediksi.check');

    // Rute yang dapat diakses oleh Admin & Kaprodi
    Route::middleware(['role:admin,prodi'])->group(function () {
        // Redirect pintar untuk dashboard
        Route::get('/dashboard', function () {
            return app(DashboardController::class)->index();
        })->name('dashboard');
        Route::get('mahasiswa', [MahasiswaController::class, 'index'])->name('mahasiswa.index');

        Route::get('monitoring', [MonitoringController::class, 'index'])->name('monitoring.index');
        Route::post('monitoring/run', [MonitoringController::class, 'runPrediction'])->name('monitoring.run');
        Route::get('monitoring/{id}', [MonitoringController::class, 'show'])->name('monitoring.show');
        Route::get('report', [ReportController::class, 'index'])->name('report.index');
        Route::get('report/pdf', [ReportController::class, 'downloadPdf'])->name('report.pdf');
    });

    // Profile (Umum)
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Routes khusus Admin
    Route::middleware(['role:admin'])->group(function () {
        Route::resource('mahasiswa', MahasiswaController::class)->except(['index']);
        Route::resource('data-latih', DataLatihController::class)
            ->except(['show'])
            ->parameters(['data-latih' => 'mahasiswa']);
        
        // Manajemen Pengguna
        Route::resource('users', \App\Http\Controllers\UserController::class);

        Route::get('/machine-learning', [MachineLearningController::class, 'index'])->name('ml.index');
        Route::post('/machine-learning/train', [MachineLearningController::class, 'train'])->name('ml.train');
        
        // Parameter C4.5
        Route::get('/parameters', [ParameterController::class, 'index'])->name('parameters.index');
        Route::post('/parameters', [ParameterController::class, 'update'])->name('parameters.update');

        // Settings
        Route::get('/settings', [SettingController::class, 'index'])->name('settings.index');
        Route::post('/settings', [SettingController::class, 'update'])->name('settings.update');
    });


}); 

require __DIR__.'/auth.php';
