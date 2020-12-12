@extends('layouts.app')
@section('content')
<!-- pagina para desplegar tabla estudiantes-->

<div class="container">
    <div align='center'>
        <div class="col-5 card">
            <div class="card-header-pills">
                <h1>Tabla Estudiantes</h1>
            </div>
        </div>
    </div>
</div>

<div class="panel-body">
    <div class="card-body">
        <div class="card-body align-content-center">
            <div class="btn-group-vertical">
                <a type="button" class="btn btn-outline-primary" style="margin-bottom:20px;float:left" href="{{ url()->previous() }}">Regresar cargar estudiantes</a>
                <a type="button" class="btn btn-outline-primary" style="margin-bottom:20px;float:left" href="viewMenuPrincipal">Regresar menú principal</a>
            </div>
        </div>
        <table class="table">
            <thead class="bg-primary text-white">
                <tr>
                    <th scope="col">Rut</th>
                    <th scope="col">Apellido paterno</th>
                    <th scope="col">Apellido materno</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Código carrera</th>
                    <th scope="col">Correo</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($estudiantes as $est)
                <tr>
                    <td>{{$est->rut_estudiante}}</td>
                    <td>{{$est->apellido_paterno}}</td>
                    <td>{{$est->apellido_materno}}</td>
                    <td>{{$est->nombre_estudiante}}</td>
                    <td>{{$est->codigo_carrera}}</td>
                    <td>{{$est->correo_estudiante}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
</div>
@endsection