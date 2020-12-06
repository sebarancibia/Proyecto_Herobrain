<?php

namespace App\Imports;

use App\Estudiante;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Collections\RowCollection;
use Maatwebsite\Excel\Imports\HeadingRowFormatter;
HeadingRowFormatter::default('none');

class EstudianteImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Estudiante([
            // Este metodo relaciona cada variable de la base de datos con las columnas del archivo Excel.       
            'rut_estudiante' => $row['Rut'],
            'apellido_paterno' => $row['Apellido Paterno'],
            'apellido_materno' => $row['Apellido Materno'],
            'nombre_estudiante' => $row['Nombre'],
            'codigo_carrera' => $row['Carrera'],
            'correo_estudiante' => $row['Correo']
        ]);
    }
}
