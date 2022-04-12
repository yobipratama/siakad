<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Mahasiswa;

class Mahasiswa extends Model
{
    protected $table = 'mahasiswa';
    protected $primaryKey = 'nim';
    protected $fillable = [
        'Nim',
        'Nama',
        'Kelas',
        'Jurusan',
    
    ];

    public function kelas()
    {
        return $this->belongsTo(kelas::class);
    }
}