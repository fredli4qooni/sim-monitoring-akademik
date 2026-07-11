<?php

namespace App\Observers;

use App\Models\Mahasiswa;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class MahasiswaObserver
{
    /**
     * Handle the Mahasiswa "created" event.
     */
    public function created(Mahasiswa $mahasiswa): void
    {
        // No longer creates user for mahasiswa
    }

    /**
     * Handle the Mahasiswa "updated" event.
     */
    public function updated(Mahasiswa $mahasiswa): void
    {
        // No longer updates user for mahasiswa
    }

    /**
     * Handle the Mahasiswa "deleted" event.
     */
    public function deleted(Mahasiswa $mahasiswa): void
    {
        // No longer deletes user for mahasiswa
    }
}
