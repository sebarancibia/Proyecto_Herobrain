<?php

namespace App\Http\Controllers;

use App\Imports\EstudianteImport;
use Illuminate\Http\Request;
use Excel;
use App\Estudiante;

class EstudianteController extends Controller
{
    //
    public function getAllEstudiante(){
        $estudiantes = Estudiante::all();
        return view('estudiantes', compact('estudiantes'));
    }

    public function importForm(){
        return view('import-form');
    }

    public function import(Request $request){
        Excel::import(new EstudianteImport, $request->file);
        return \redirect('/get-all-estudiante');
    }
}
