<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Foto extends Model
{
    use HasFactory;

    protected $fillable = [
        'descripcion',
        'foto_perfil',
        'imagen_url',
        'pajaro_id'
    ];
}
