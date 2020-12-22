<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Estudiante;
use App\situacion;
use App\Atencion;


class FichaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $atenciones=Atencion::all();
        $situaciones=situacion::all();
        $estudiantes=Estudiante::all();
        $estudianteMostrar=null;
        return view('generarFicha',compact('estudiantes', 'estudianteMostrar','atenciones','situaciones'));
    }

    /**
     * Metodo que buscar el estudiante y lo retorna
     *
     * @return \Illuminate\Http\Response
     */
    public function buscarEstudianteRut(Request $request)
    {
        $atenciones=Atencion::all();
        $situaciones=situacion::all();
        $estudiantes=Estudiante::all();
        $rut_estudiante = $request->rut_estudiante;
        $estudianteMostrar=Estudiante::where('rut_estudiante',$rut_estudiante)->first();
        if(Estudiante::where('rut_estudiante',$rut_estudiante)->first() == null) {
            return back()->with('error', 'El RUT o Nombre del estudiante no existe');
        }
        return view('generarFicha',compact('estudianteMostrar','estudiantes','atenciones','situaciones'));
    }


    public function mostrarAtencion($id)
    {
        
        $atenciones=Atencion::find($id);
        
        return view('atencion',compact('atenciones'));
    }

    public function mostrarSituacion($id)
    {
        $situaciones=situacion::find($id);
        return view('situacion',compact('situaciones'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
