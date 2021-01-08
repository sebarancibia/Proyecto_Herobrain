<?php

namespace App\Http\Controllers;

use App\Imports\EstudianteImport;
use Illuminate\Http\Request;
use Excel;
use App\Estudiante;
use App\Http\Requests\ExcelStoreRequest;
use Maatwebsite\Excel\HeadingRowImport;

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
        $headings = (new HeadingRowImport)->toArray($request->file2);
        if(strtoupper($headings[0][0][0]) != 'RUT'){
            return back()->with('error', 'El encabezado RUT esta mal inscrito o no existe');
        }
    
        if(strtoupper($headings[0][0][1]) != 'APELLIDO_PATERNO'){
            return back()->with("señor su archivo esta malo, debe usar el campo APELLIDO PATERNO como encabezado");
        }

        if(strtoupper($headings[0][0][2]) != 'APELLIDO_MATERNO'){
            return back()->with("señor su archivo esta malo, debe usar el campo APELLIDO MATERNO como encabezado");
        }

        if(strtoupper($headings[0][0][3]) != 'NOMBRE'){
            return back()->with("señor su archivo esta malo, debe usar el campo APELLIDO MATERNO como encabezado");
        }

        if(strtoupper($headings[0][0][4]) != 'CARRERA'){
            return back()->with("señor su archivo esta malo, debe usar el campo APELLIDO MATERNO como encabezado");
        }
        
        if(strtoupper($headings[0][0][5]) != 'CORREO'){
            return back()->with("señor su archivo esta malo, debe usar el campo APELLIDO MATERNO como encabezado");
        }

        $excel = Excel::import(new EstudianteImport, $request->file2);
        return redirect('/get-all-estudiante');
    }
}
