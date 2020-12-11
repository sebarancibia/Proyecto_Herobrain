<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Atencion extends Model
{
    protected $fillable = [
        'rut_estudiante',
        'nombre_estudiante',
        'descripcion',
        'medio',
        'nombre_asignatura',
        'nombre_profesor'
    ];
}
