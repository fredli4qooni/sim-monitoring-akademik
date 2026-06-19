<?php

namespace Database\Seeders;

use App\Models\Mahasiswa;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class SyncMahasiswaUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $mahasiswas = Mahasiswa::all();

        foreach ($mahasiswas as $mahasiswa) {
            $email = $mahasiswa->nim . '@student.uinradenintan.ac.id';
            
            $user = User::where('email', $email)->orWhere('mahasiswa_id', $mahasiswa->id)->first();
            
            if (!$user) {
                User::create([
                    'name' => $mahasiswa->nama,
                    'email' => $email,
                    'password' => Hash::make($mahasiswa->nim),
                    'role' => 'mahasiswa',
                    'mahasiswa_id' => $mahasiswa->id,
                ]);
            }
        }
    }
}
