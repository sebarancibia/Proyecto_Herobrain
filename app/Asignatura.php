<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asignatura extends Model
{
    //se declara la tabla asignaturas.
    protected $table = 'asignaturas';

    //se declaran los atributos del modelo.
    protected $fillable = ['codigo_asignatura', 'nrc', 'nombre_asignatura'];

}
