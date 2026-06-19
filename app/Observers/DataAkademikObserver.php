<?php

namespace App\Observers;

use App\Models\DataAkademik;

class DataAkademikObserver
{
    /**
     * Handle the DataAkademik "created" event.
     */
    public function created(DataAkademik $dataAkademik): void
    {
        app(\App\Services\DecisionTreePredictionService::class)->updatePredictionForMahasiswa($dataAkademik->mahasiswa);
    }

    /**
     * Handle the DataAkademik "updated" event.
     */
    public function updated(DataAkademik $dataAkademik): void
    {
        app(\App\Services\DecisionTreePredictionService::class)->updatePredictionForMahasiswa($dataAkademik->mahasiswa);
    }

    /**
     * Handle the DataAkademik "deleted" event.
     */
    public function deleted(DataAkademik $dataAkademik): void
    {
        app(\App\Services\DecisionTreePredictionService::class)->updatePredictionForMahasiswa($dataAkademik->mahasiswa);
    }

    /**
     * Handle the DataAkademik "restored" event.
     */
    public function restored(DataAkademik $dataAkademik): void
    {
        //
    }

    /**
     * Handle the DataAkademik "force deleted" event.
     */
    public function forceDeleted(DataAkademik $dataAkademik): void
    {
        //
    }
}
