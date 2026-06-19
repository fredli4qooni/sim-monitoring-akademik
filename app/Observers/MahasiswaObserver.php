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
        $user = User::create([
            'name' => $mahasiswa->nama,
            'email' => $mahasiswa->nim . '@student.uinradenintan.ac.id',
            'password' => Hash::make($mahasiswa->nim), // Password default adalah NIM
            'role' => 'mahasiswa',
            'mahasiswa_id' => $mahasiswa->id,
        ]);
    }

    /**
     * Handle the Mahasiswa "updated" event.
     */
    public function updated(Mahasiswa $mahasiswa): void
    {
        if ($mahasiswa->user) {
            $mahasiswa->user->update([
                'name' => $mahasiswa->nama,
                'email' => $mahasiswa->nim . '@student.uinradenintan.ac.id',
            ]);
        }
    }

    /**
     * Handle the Mahasiswa "deleted" event.
     */
    public function deleted(Mahasiswa $mahasiswa): void
    {
        if ($mahasiswa->user) {
            $mahasiswa->user->delete();
        }
    }
}
