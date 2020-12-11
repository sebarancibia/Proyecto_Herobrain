<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Estudiante;
use App\User;
use App\Atencion;
use App\Asignatura;

class atencionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('reportarAtencion');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $situacion=Atencion::create([
            'rut_estudiante' => $request->rut_estudiante,
            'nombre_estudiante' => $request->nombre_estudiante,
            'descripcion' => $request->descripcion,
            'medio' => $request->medio,
            'nombre_asignatura' => $request->asignatura,
            'nombre_profesor' => $request->profesor            
        ]);
        return view('viewMenuPrincipal');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   
        $estudiantes = Estudiante::all();
        $estudianteMostrar=null;
        return view('reportarAtencion',compact('estudiantes'),compact('estudianteMostrar'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $asignaturas = Asignatura::all();
        $usuarios = User::all();
        $rut_estudiante = $request->rut_estudiante;
        $estudianteMostrar=Estudiante::where('rut_estudiante',$rut_estudiante)->first();
        if($estudianteMostrar == null){
            $estudianteMostrar=Estudiante::where('nombre_estudiante',$rut_estudiante)->first();
        }   
        $estudiantes=Estudiante::all();     
        return view('reportarAtencion',compact('estudiantes','estudianteMostrar','usuarios','asignaturas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
