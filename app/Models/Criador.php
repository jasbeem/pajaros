<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Criador extends Model
{
    use HasFactory;

    public $fillable = [
        'identificacion',
        'nombre',
        'foto_url',
        'correo_e',
        'telefono',
        'descripcion'
    ];
}
