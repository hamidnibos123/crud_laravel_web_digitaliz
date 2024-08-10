<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Materi;

class Peserta extends Model
{
    use HasFactory;

    protected $table = 'peserta';

    // Relasi ke model Materi
   public function materi()
    {
        return $this->hasMany(Materi::class, 'peserta_id'); // 'peserta_id' adalah foreign key di tabel materi
    }
}
