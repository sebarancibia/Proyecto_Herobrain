<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    protected $fillable = [
        'rut_estudiante', 'apellido_paterno' , 'apellido_materno' , 'nombre_estudiante', 'codigo_carrera' , 'correo_estudiante',
    ];
}
