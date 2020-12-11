@extends('layouts.app')
@section('content')
<!-- pagina para desplegar tabla estudiantes-->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estudiantes</title>
</head>

<a type="button" class="btn btn-outline-primary" style="margin-bottom:20px;float:left" href="{{ url()->previous() }}">VOLVER</a>
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

@endsection