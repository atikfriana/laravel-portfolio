<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendidikan extends Model
{
    use HasFactory;

    // Nama tabel di database
    protected $table = 'pendidikan'; // Nama tabel yang ada di database

    // Kolom yang dapat diisi melalui form (fillable)
    protected $fillable = [
        'nama_institusi',
        'program_studi',
        'tahun_mulai',
        'tahun_selesai',
        'gambar',
    ];
    
}
