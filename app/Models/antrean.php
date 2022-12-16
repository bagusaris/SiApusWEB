<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class antrean extends Model
{
    use HasFactory;

    protected $table = 'antreans';

    protected $fillable = [
        'id_puskesmas',
        'id_poli',
        'id_pasien',
        'nomor_antrean',
        'nomer',
        'status',
      ];

    public function puskesmas(){
        return $this->belongsTo(puskesmas::class);
    }
    public function polis(){
        return $this->belongsTo(poli::class);
    }
    public function pasiens(){
        return $this->belongsTo(pasien::class);
    }
}
