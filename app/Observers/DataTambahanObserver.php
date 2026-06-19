<?php

namespace App\Observers;

use App\Models\DataTambahan;

class DataTambahanObserver
{
    /**
     * Handle the DataTambahan "created" event.
     */
    public function created(DataTambahan $dataTambahan): void
    {
        app(\App\Services\DecisionTreePredictionService::class)->updatePredictionForMahasiswa($dataTambahan->mahasiswa);
    }

    /**
     * Handle the DataTambahan "updated" event.
     */
    public function updated(DataTambahan $dataTambahan): void
    {
        app(\App\Services\DecisionTreePredictionService::class)->updatePredictionForMahasiswa($dataTambahan->mahasiswa);
    }

    /**
     * Handle the DataTambahan "deleted" event.
     */
    public function deleted(DataTambahan $dataTambahan): void
    {
        app(\App\Services\DecisionTreePredictionService::class)->updatePredictionForMahasiswa($dataTambahan->mahasiswa);
    }

    /**
     * Handle the DataTambahan "restored" event.
     */
    public function restored(DataTambahan $dataTambahan): void
    {
        //
    }

    /**
     * Handle the DataTambahan "force deleted" event.
     */
    public function forceDeleted(DataTambahan $dataTambahan): void
    {
        //
    }
}
