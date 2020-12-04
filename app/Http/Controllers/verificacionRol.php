<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rol;
use App\User;

class verificacionRol extends Controller
{
    public function index($user_id){
        $rols=Rol::findOrFail($user_id);
        if($rols->rol_id==1){
            return view('auth.adminView.menuAdmin');
        }
        else{
            return view('auth.viewMenuPrincipal');
        }
    }
}
