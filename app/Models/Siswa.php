<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;
    protected $fillable = [
        'nis',
        'nama',
        'rombel',
        'rayon',
        'tanggal_lahir',
        'tempat_lahir',
        'alamat',
        'no_hp',
        'email',
        'pas_foto',
    ];
}
