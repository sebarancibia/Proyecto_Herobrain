<?php

namespace App\Http\Controllers;

use App\Imports\EstudianteImport;
use Illuminate\Http\Request;
use Excel;
use App\Estudiante;
use App\Http\Requests\ExcelStoreRequest;

class EstudianteController extends Controller
{
    // metodo que retorna vista para desplegar tabla de estudiantes.
    public function getAllEstudiante(){
        $estudiantes = Estudiante::all();
        return view('estudiantes', compact('estudiantes'));
    }

    // metodo que retorna a la vista "import-form"
    public function importForm(){
        return view('import-form');
    }

    // este metodo ejecuta la importacion del archivo estudiantes.
    public function import2(ExcelStoreRequest $request){
        Excel::import(new EstudianteImport, $request->file2);
        return redirect('/get-all-estudiante');
    }
}
