<?php

namespace App\Imports;

use App\Asignatura;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Collections\RowCollection;
use Maatwebsite\Excel\Imports\HeadingRowFormatter;
HeadingRowFormatter::default('none');

class AsignaturaImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Asignatura([
            // Este metodo relaciona cada variable de la base de datos con las columnas del archivo Excel.
            'codigo_asignatura' => $row['Codigo'],
            'nrc' => $row['NRC'],
            'nombre_asignatura' => $row['Asignatura'],

        ]);
    }
}
