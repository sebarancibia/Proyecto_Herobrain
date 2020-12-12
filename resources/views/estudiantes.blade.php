@extends('layouts.app')
@section('content')
<!-- pagina para desplegar tabla estudiantes-->

<div class="container">
    <div align='center'>
        <div class="col-5">
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
                <a type="button" class="btn btn-outline-primary" style="margin-bottom:20px;float:left" href="viewMenuPrincipal">Regresar menu principal</a>
            </div>
        </div>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">RUT</th>
                    <th scope="col">APELLIDO PATERNO</th>
                    <th scope="col">APELLIDO MATERNO</th>
                    <th scope="col">NOMBRE</th>
                    <th scope="col">CODIGO CARRERA</th>
                    <th scope="col">CORREO</th>
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