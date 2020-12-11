@extends('layouts.app')

@section('content')
<div class="container">
    <div align='center'>
        <div class="col-5">
            <div class="panel-heading">
                <div class="card">
                    <h1 class="panel-heading">Reportar Situación</h1>
                </div>
            </div>
        </div>
    </div>

    @foreach($estudiantes as $estudiante)
    @endforeach

    <div class="container">
        <br>
        <div class="row">
            <div class="col-md-6">
                <form class="form-horizontal" action="{{ route ('reportarSituacion.edit', $estudiante->rut_estudiante )}}" method="put">
                    @csrf
                    <div class="container">
                        <br><br>
                        <h5 class="card-title card col-md-8">Ingrese RUT o Nombre a reportar</h5>
                        <br>
                        <div class="col-md-6">
                            <input id="rut_estudiante" type="text" class="form-control" name="rut_estudiante" value="">
                            <button class="btn btn-outline-primary" style="margin-bottom:20px;float:right" href="#">Buscar</button>
                        </div>

                    </div>
                </form>
            </div>
            <div class="col-md-6">
                @if($estudianteMostrar==null)
                <div class="card-body card ">

                    <h5 class="card-title">Información del Estudiante</h5>
                    <label class="col-md-8 control-label">Rut del estudiante:</label>
                    <label class="col-md-8 control-label">Nombre del estudiante:</label>
                    <label class="col-md-8 control-label">Apellido Paterno del estudiante:</label>
                    <label class="col-md-8 control-label">Apellido Materno del estudiante:</label>
                    <label class="col-md-8 control-label">Correo del estudiante:</label>
                </div>
                @else
                <div class="card-body card ">
                    <h5 class="card-title">Información del Estudiante</h5>
                    <label class="col-md-8 control-label">Rut del estudiante: {{$estudianteMostrar->rut_estudiante}}</label>
                    <label class="col-md-8 control-label">Nombre del estudiante: {{$estudianteMostrar->nombre_estudiante}}</label>
                    <label class="col-md-8 control-label">Apellido Paterno del estudiante: {{$estudianteMostrar->apellido_paterno}}</label>
                    <label class="col-md-8 control-label">Apellido Materno del estudiante: {{$estudianteMostrar->apellido_materno}}</label>
                    <label class="col-md-8 control-label">Correo del estudiante: {{$estudianteMostrar->correo_estudiante}}</label>
                </div>
                @endif
            </div>
        </div>
    </div>

    <form class="form-horizontal" action="{{route('reportarSituacion.create', $estudianteMostrar, $descripcion, $tipo, $asignatura)}}" method="put">
        <!--ACA FALTA VER LA RUTA, FALTA NOMBRE ASIGNATURA(LISTO), RUT ESTUDIANTE(LISTO), NOMBRE ESTUDIANTE(LISTO), TIPO(LISTO), DESCRIPCION(LISTO)-->

        <!---->
        @method('PACH')
        @csrf
        {{ csrf_field() }}
        {{method_field('PUT')}}
        <!---->
        

        <div class="card-body">
            <table class="table">
                <thead class="thead">
                    <tr class="bg-primary text-white">
                        <h5 class="card-title card col-md-2">Descripción</h5>
                        <textarea class="form-control" name="descripcion" placeholder="Ingrese aquí la descripción"></textarea>
                    </tr>
                    </theard>
            </table>
        </div>

        <div class="form-group row">
            <label for="tipo" class="col-md-4 col-form-label text-md-right">Tipo de situación:</label>
            <div class="col-md-6">
                <select id="tipo" name="tipo" class="form-control">
                    <option value="academica">Academica</option>
                    <option value="personal">Personal</option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="asignatura" class="col-md-4 col-form-label text-md-right">Asignatura:</label>
            <div class="col-md-6">
                <select id="asignatura" name="asignatura" class="form-control">
                    <option value="academica">Ing. Software</option>
                    <option value="personal">Redes de Computadores</option>
                </select>
            </div>
        </div>
        <button type="submit" class="btn btn-primary" style="margin-bottom:20px;float:right">
            Enviar Reporte
        </button>
    </form>
</div>

@endsection