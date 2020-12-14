<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Estudiante;
use App\User;

class menuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('viewMenuPrincipal');
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
    public function showEditEstudiante()
    {
        $estudiantes = Estudiante::all();
       // dd($estudiantes);
        return view('showEstudiante',compact('estudiantes'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  $dato
     * @return \Illuminate\Http\Response
     */
    public function editEstudianteRut(Request $request)
    {   
        $rut_estudiante = $request->rut_estudiante;
        $estudiantes=Estudiante::where('rut_estudiante',$rut_estudiante)->first();
        if(Estudiante::where('rut_estudiante',$rut_estudiante)->first() == null) {
            return back()->with('error', 'El RUT o Nombre del estudiante no existe');
        }
        return view('editarCorreoEstudiante',compact('estudiantes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $estudiantes=Estudiante::find($id);
        $estudiantes->correo_estudiante =$request->correo_estudiante;
        $estudiantes->update();
        
        return view('viewMenuPrincipal');
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