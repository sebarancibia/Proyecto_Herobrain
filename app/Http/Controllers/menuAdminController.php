<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class menuAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('auth.adminView.menuAdmin',compact('users'));
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
        $users= User::find($id);
        return view('auth.adminView.editar', compact('users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $users=User::findOrFail($id);
        $users->name =$request->name;
        $users->email =$request->email;
        $users->password =bcrypt($request->password);
        $users->rol_usuario =$request->rol_usuario;
        $users->activo=true;
        $users->update();
        
        $users = User::all();
        return view('auth.adminView.menuAdmin',compact('users'));
    }

    public function update2($id)
    {
        $users=User::findOrFail($id);
        $users->activo=false;
        $users->update();
        
        $users = User::all();
        return view('auth.adminView.menuAdmin',compact('users'));
    }

    /**
     * Remove the specified resource from storage.
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
