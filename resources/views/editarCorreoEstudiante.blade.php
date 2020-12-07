@extends('layouts.app')

@section('content')
    @if($estudiantes == null)
        <h1>chao</h1>
    @else
    <h1>{{$estudiantes->rut_estudiante}}</h1>
    <h1>{{$estudiantes->nombre_estudiante}}</h1>
    <h1>{{$estudiantes->correo_estudiante}}</h1>
    <h1>{{$estudiantes->apellidoPaterno_estudiante}}</h1>
    <h1>hola</h1>
    @endif
@endsection