<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PrediksiKelulusan extends Model
{
    use HasFactory;

    protected $fillable = ['mahasiswa_id', 'label_aktual', 'prediksi_sistem', 'probabilitas', 'status_risiko'];

    public function mahasiswa() {
        return $this->belongsTo(Mahasiswa::class);
    }
}
