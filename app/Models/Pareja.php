<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pareja extends Model
{
    use HasFactory;

    protected $fillable = [
        'madre_id',
        'padre_id',
        'jaula',
        'fecha_union'
    ];
}
