<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Attributes\ObservedBy;

#[ObservedBy([\App\Observers\DataTambahanObserver::class])]
class DataTambahan extends Model
{
    use HasFactory;

    protected $fillable = ['mahasiswa_id', 'kondisi_ekonomi', 'keaktifan_organisasi', 'asal_sekolah'];

    public function mahasiswa() {
        return $this->belongsTo(Mahasiswa::class);
    }
}
