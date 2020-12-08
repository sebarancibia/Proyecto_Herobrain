<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Estudiante;
use App\User;

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
        $rut_estudiante = $request->rut_estudiante;
        $estudianteMostrar=Estudiante::where('rut_estudiante',$rut_estudiante)->first();
        if($estudianteMostrar == null){
            $estudianteMostrar=Estudiante::where('nombre_estudiante',$rut_estudiante)->first();
        }   
        $estudiantes=Estudiante::all();     
        return view('reportarSituacion',compact('estudiantes'),compact('estudianteMostrar'));
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
