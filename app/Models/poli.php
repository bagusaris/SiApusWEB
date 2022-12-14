<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class poli extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_poli';
    protected $table = 'polis';

    public function puskesmas(){
        return $this->belongsTo(puskesmas::class);
    }
}
