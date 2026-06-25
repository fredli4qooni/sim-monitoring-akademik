<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Attributes\ObservedBy;

#[ObservedBy([\App\Observers\MahasiswaObserver::class])]
class Mahasiswa extends Model
{
    use HasFactory;

    protected $fillable = ['nim', 'nama', 'angkatan', 'status_aktif'];

    public function dataTambahan() {
        return $this->hasOne(DataTambahan::class);
    }
    public function prediksiKelulusan() {
        return $this->hasOne(PrediksiKelulusan::class);
    }
    public function user() {
        return $this->hasOne(User::class);
    }
}
