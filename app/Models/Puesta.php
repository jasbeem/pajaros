<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Puesta extends Model
{
    use HasFactory;

    protected $fillable = [
        'estado',
        'fecha_primer_huevo',
        'fecha_incubacion',
        'fecha_mirar',
        'fecha_eclosion',
        'fecha_anillamiento',
        'fecha_rejilla',
        'fecha_destete',
        'numero_huevos',
        'numero_pisados',
        'numero_abortados',
        'pollos_destetados',
        'pollos_muertos',
        'pareja_id'
    ];
}
