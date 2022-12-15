<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class puskesmas extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_puskesmas';
    protected $table = 'puskesmas';

    protected $fillable = [
        'nama_puskesmas',
        'email_puskesmas',
        'telp_puskesmas',
        'alamat_puskesmas',
        'foto_puskesmas',
        'jam_kerja',
      ];
}
