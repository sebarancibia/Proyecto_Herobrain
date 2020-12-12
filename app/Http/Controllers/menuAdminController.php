<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class menuAdminController extends Controller
{
    /**
     * Retorna la lista de usuarios hacia la view menuAdmin
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('auth.adminView.menuAdmin');
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
        $users = User::all();
        return view('auth.adminView.mostrarUsuarios',compact('users'));
    }

    /**
     * Recibe una ID, busca a al usuario con la ID y retorna el usario hacia la vista editar
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users= User::find($id);
        return view('auth.adminView.editar', compact('users'));
    }

    /**
     * Recibe una Id del usuario y nuevos datos de usuario, busca el usuario con el id recibido y lo actualiza con los datos recibidos 
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

  /*  public function update(Request $request,$id)
    {
        var x = new Boolean(false);
        $users=User::findOrFail($id);
        $users->name =$request->name;
        $users->password =bcrypt($request->password);
        $users->rol =$request->rol;
        $users->activo=true;
        for ($i=0; $i <$users ; $i++) { 
            if($users->email==$request->email){
                x=false;
            }
        }
        if(x){
            $users->email =$request->email; 
        }
        $users = User::all();
        $users->update();
        return view('auth.adminView.menuAdmin',compact('users'));

        
    }
    */
    public function update( Request $request, $id ) {
        $users=User::findOrFail($id);
      $this->validate(
           $request,
            [
                'email'                => "required|email|unique:users,email,{$id}",
                $users->email=$request->email,
            ]
        );
        $users->name =$request->name;
        $users->rol =$request->rol;
        $users->update();
        $users = User::all();
        return view('auth.adminView.menuAdmin',compact('users'));
    }

    /**
     * Recibe un ID, busca al usuario con ese id y cambia su estado activo a false
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $users=User::findOrFail($id);
        $users->activo=false;
        $users->update();
        
        return back();
    }
}
