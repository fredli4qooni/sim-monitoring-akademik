<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Attributes\ObservedBy;

#[ObservedBy([\App\Observers\DataTambahanObserver::class])]
class DataTambahan extends Model
{
    use HasFactory;

    protected $fillable = ['mahasiswa_id', 'ip_terakhir', 'kondisi_ekonomi', 'lingkungan_sosial', 'lingkungan_pertemanan', 'keaktifan_organisasi', 'pengaruh_organisasi', 'layanan_akademik', 'asal_sekolah'];

    public function mahasiswa() {
        return $this->belongsTo(Mahasiswa::class);
    }
}
