<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class antrean extends Model
{
    use HasFactory;

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
