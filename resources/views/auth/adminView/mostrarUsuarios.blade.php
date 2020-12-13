@extends('layouts.app')

@section('content')

<div class="container">
    <div align='center'>
        <div class="col-5">
                <div class="card-header-pills">
                    <h1>Tabla Usuarios</h1>
                </div>
        </div>
    </div>
</div>

<div class="card-body align-content-center">
<a type="button" class="btn btn-outline-primary" style="margin-bottom:20px;float:left" href="{{ route ('menuAdmin.index')}}">Regresar menú principal</a>
<div class="panel-body">
    <div class="card-body">
        <table class="table">
            <thead class="thead">
                <tr class="bg-primary text-white">
                    <th scope="col">ID</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Rol</th>
                    <th scope="col">Email</th>
                    <th scope="col">Estado</th>
                    <th scope="col">Editar</th>
                    <th scope="col">Eliminar</th>

                </tr>
            </thead>
            <tbody>

                <!--Recorre la lista de usuarios y los imprime-->
                @foreach($users as $user)
                <tr>
                    <th scope="row">{{$user->id}}</th>
                    <td>{{$user->name}}</td>
                    @if($user->rol == 'administrador')<th scope="col">Administrador</th> @endif
                    @if($user->rol == 'jefeCarrera')<th scope="col">Jefe de Carrera</th> @endif
                    @if($user->rol == 'jefeCarreraProfesor')<th scope="col">Jefe de Carrera, Profesor</th> @endif
                    @if($user->rol == 'secretaria')<th scope="col">Secretaria</th> @endif
                    @if($user->rol == 'profesor')<th scope="col">Profesor</th> @endif
                    <td>{{$user->email}}</td>
                    @if($user->activo==true)
                    <td>Activo</td>

                    @else
                    <td>Inactivo</td>
                    @endif

                    <td>
                        <!--Redirecciona a editar usuario segun ID del usuario seleccionado -->
                        <form method="put" action="{{ route ('menuAdmin.edit', $user->id )}}">

                            @csrf

                            <button class="btn btn-primary btn-sm"> Editar Usuario</button>

                        </form>
                    </td>
                    <td>
                        <!--Redirecciona a cambiar el estado del ususario eleccionado a inactivo-->
                        <form method="post" action="{{ route ('menuAdmin.destroy',$user->id) }}">
                            @method('delete')
                            @csrf
                            <button class="btn btn-danger btn-sm"> Eliminar Usuario</button>
                        </form>
                    </td>
                </tr>

                @endforeach
            </tbody>
        </table>

    </div>
</div>
</div>
@endsection