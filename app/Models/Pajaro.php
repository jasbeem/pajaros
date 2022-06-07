<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pajaro extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'fecha_nacimiento',
        'numero',
        'anyo',
        'pais',
        'sexo',
        'tipo',
        'tipo_canario',
        'canario_canto',
        'clase_melaninas',
        'tipo_melaninas',
        'categoria',
        'lipocromo',
        'complementarios',
        'observaciones'
    ];
}
