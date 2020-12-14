<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Estudiante;
use App\User;
use Illuminate\Contracts\Validation\Rule;
use App\Http\Controllers\SomeCustomException;

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
       // if(){
         //     return view('viewMenuPrincipal');  
       // }
    
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
       // dd($request);
        $estudiantes=Estudiante::findOrFail($id);
        $this->validate(
           $request,
             [
                'email'                => "required|email|unique:estudiantes,correo_estudiante,{$id}",
               
             ]
         ); 

        $estudiantes->correo_estudiante=$request->email;
        $estudiantes->update();
        $estudiantes = Estudiante::all();
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