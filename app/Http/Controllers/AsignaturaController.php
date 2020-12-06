<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imports\AsignaturaImport;
use Excel;
use App\Asignatura;
use App\Http\Requests\ExcelStoreRequest;

class AsignaturaController extends Controller
{
    //
    public function getAllAsignaturas(){
        $asignaturas = Asignatura::all();
        return view('asignaturas', compact('asignaturas'));
    }
    
    public function importFormAsignatura(){
        return view('import-form-asignaturas');
    }
    public function import(ExcelStoreRequest $request){

        Excel::import(new AsignaturaImport,$request->file2);
        return redirect('/get-all-asignaturas');
    }

}
