<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class situacion extends Model
{
    protected $fillable = [
        'descripcion',
        'tipo',
        'rutEstudiante',
        'nombreEstudiante',
        'nombreAsignatura'

    ];
}
