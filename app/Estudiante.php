<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{   
    // se declara la tabla estudiantes.
    protected $table = "estudiantes";
    
    // se declaran las variables del modelo.
    protected $fillable = [
        'rut_estudiante', 'apellido_paterno' , 'apellido_materno' , 'nombre_estudiante', 'codigo_carrera' , 'correo_estudiante'
    ];
}
