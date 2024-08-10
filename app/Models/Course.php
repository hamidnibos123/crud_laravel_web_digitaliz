<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    // Tentukan atribut yang dapat diisi massal
protected $fillable = [
    'title',
    'description',
    'duration',
    'material_title',
    'material_description',
    'material_embed_link',
];
}
