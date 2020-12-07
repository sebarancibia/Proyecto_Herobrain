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
    public function show(User $user)
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
    public function edit(Request $request)
    {
        $rut_estudiante = $request->rut_estudiante;
        $estudiantes=Estudiante::where('rut_estudiante',$rut_estudiante)->first();
        if($estudiantes == null){
            $estudiantes=Estudiante::where('nombre_estudiante',$rut_estudiante)->first();
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