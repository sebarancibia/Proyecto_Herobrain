<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Estudiante;
use App\User;
use App\situacion;
use App\Asignatura;

class situacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('reportarSituacion');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $situacion=Situacion::create([
            'descripcion' => $request->descripcion,
            'tipo' => $request->tipo,
            'rut_estudiante' => $request->rut_estudiante,
            'nombre_estudiante' => $request->nombre_estudiante,
            'nombre_asignatura' => $request->asignatura,            
        ]);

        return redirect()->route('viewMenuPrincipal.index')->with('situacion','Situación creada correctamente');
    }

    public function reportarSituacion2(Request $request)
    {
        $asignaturas = Asignatura::all();
        $estudiantes = Estudiante::all();
        $rut_estudiante = $request->rut_estudiante;
        $estudianteMostrar=Estudiante::where('rut_estudiante',$rut_estudiante)->first();
        if($request->tipo=='academica' && $request->asignatura=='ninguna'){
            
            return view('reportarSituacion',compact('estudiantes','estudianteMostrar','asignaturas'))->with('successMsg','Debe ingresar una asignatura si la situacion es académica.');
        }elseif($request->tipo!='academica' && $request->asignatura!='ninguna'){
            
            return view('reportarSituacion',compact('estudiantes','estudianteMostrar','asignaturas'))->with('successMsg','No debe ingresar una asignatura si el tipo de situación es personal.');
            //return redirect()->route('showEditEstudiante')->with('message','Estudiante editado correctamente');
        }
        $this->create($request);         
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
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $estudiantes = Estudiante::all();
        $estudianteMostrar=null;
        return view('reportarSituacion',compact('estudiantes'),compact('estudianteMostrar'));

        
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
        $rut_estudiante = $request->rut_estudiante;
        $estudianteMostrar=Estudiante::where('rut_estudiante',$rut_estudiante)->first();
        if($estudianteMostrar == null){
            $estudianteMostrar=Estudiante::where('nombre_estudiante',$rut_estudiante)->first();
        }   
        $estudiantes=Estudiante::all();     
        return view('reportarSituacion',compact('estudiantes','estudianteMostrar','asignaturas'));
    }
    public function crearSituacion(Request $request)
    {
        $asignaturas = Asignatura::all();
        $rut_estudiante = $request->rut_estudiante;
        $estudianteMostrar=Estudiante::where('rut_estudiante',$rut_estudiante)->first();
        if($estudianteMostrar == null){
            $estudianteMostrar=Estudiante::where('nombre_estudiante',$rut_estudiante)->first();
        }   
        $estudiantes=Estudiante::all();     
        return view('reportarSituacion',compact('estudiantes','estudianteMostrar','asignaturas'));
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
