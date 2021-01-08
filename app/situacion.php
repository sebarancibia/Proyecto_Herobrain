<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class situacion extends Model
{
    protected $fillable = [
        'descripcion',
        'tipo',
        'rut_estudiante',
        'nombre_estudiante',
        'nombre_asignatura'

    ];
}
