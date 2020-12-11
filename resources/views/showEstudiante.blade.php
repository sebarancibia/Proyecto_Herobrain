@extends('layouts.app')

@section('content')

@foreach($estudiantes as $estudiante)
@endforeach

<form class="form-horizontal" action="{{ route ('viewMenuPrincipal.edit', $estudiante->rut_estudiante )}}" method="put">
    @csrf
    <div class="container">
        <label for="rut_estudiante" class="col-md-4 control-label">Ingrese RUT o Nombre del estudiante</label>

        <div class="col-md-6">
            <input id="rut_estudiante" type="rut_estudiante" class="form-control" name="rut_estudiante" value="">
            <button class="btn btn-outline-primary" style="margin-bottom:20px;float:right" href="#">Cambiar</button>
        </div>
        
    </div>
</form>

<!-- validar que si o si entra un dato, validar en caso de que no se encuentre-->


<!-- CAMBIAR VISUAL-->
<div class="panel-body">
    <div class="card-body">
        <table class="table">
            <thead class="thead">
                <tr class="bg-primary text-white">
                    <th scope="col">Rut</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido Paterno</th>
                    <th scope="col">Apellido Materno</th>
                    <th scope="col">Email</th>
                </tr>
            </thead>
            <tbody>

                @foreach($estudiantes as $estudiante)
                <tr>
                    <th scope="row">{{$estudiante->rut_estudiante}}</th>
                    <td>{{$estudiante->nombre_estudiante}}</td>
                    <td>{{$estudiante->apellido_paterno}}</td>
                    <td>{{$estudiante->apellido_materno}}</td>
                    <td>{{$estudiante->correo_estudiante}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>
</div>


@endsection