@extends('layouts.app')

@section('content')

    <div class="container">
        <div align = 'center'>
            <div class="col-5">
                <div class = "panel-heading">
                    <div class="card">
                        <br>
                        <br>
                        <h1>MENU ADMINISTRADOR</h1>
                        <br>
                        <br>
                    </div>
                </div>
            </div>
        </div>        
    </div>
    
    <div class="panel-body">
        <div class="card-body">
        <table class="table">
            <thead class="thead">
                <tr class = "bg-primary text-white" >
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">Rol</th>
                <th scope="col">email</th>
                <th scope="col">Editar</th>
                <th scope="col">Eliminar</th>
                <a type="button" class="btn btn-outline-primary" style = "margin-bottom:20px;float:right" href="register">Agregar Usuario</a>
                </tr>
            </thead>
            <tbody>

                @foreach($users as $user)
                        @if($user->rol_usuario !='administrador' and $user->activo == true)
                            <tr>
                                <th scope="row">{{$user->id}}</th>
                                <td>{{$user->name}}</td>
                                <td>{{$user->rol_usuario}}</td>
                                <td>{{$user->email}}</td>
                                <td>
                                    <form method = "put" action="{{ route ('adminMenu.edit', $user->id )}}" >
                                        
                                        @csrf
                                        
                                        <button class = "btn btn-primary btn-sm" > Editar Usuario</button>
                                        
                                    </form>
                                </td>
                                <td>
                                    <form method = "post" action ="#">
                                        @method('delete')
                                        @csrf
                                        <button class = "btn btn-danger btn-sm"> Eliminar Usuario</button>
                                    </form>
                                </td>
                            </tr>
                        @endif
                    
                @endforeach
            </tbody>
        </table>

        </div>
    </div>
    
@endsection