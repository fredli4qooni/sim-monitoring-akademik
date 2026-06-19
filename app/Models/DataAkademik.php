<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Attributes\ObservedBy;

#[ObservedBy([\App\Observers\DataAkademikObserver::class])]
class DataAkademik extends Model
{
    use HasFactory;

    protected $fillable = ['mahasiswa_id', 'semester', 'ips', 'ipk', 'total_sks'];

    public function mahasiswa() {
        return $this->belongsTo(Mahasiswa::class);
    }
}
