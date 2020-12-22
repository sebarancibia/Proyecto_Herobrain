@extends('layouts.app')

@section('content')
<div class="container">
    <a type="button" class="btn btn-outline-primary" style="margin-bottom:20px;float:left" href="http://127.0.0.1:8000/viewMenuPrincipal">Regresar menú principal</a>
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

    <div class="container card">
        <br>
        <div class="row">
            <div class="col-md-6">
                <form class="form-horizontal" action="{{ route ('crearSituacion')}}" method="post">
                    @csrf
                    <div class="container">
                        <br><br>
                        <div class="col-md-12">
                        <h5 class="card-title card col-md-8">Ingrese RUT o Nombre del estudiante a reportar situación</h5>
                        </div>
                        <br>
                        <div class="col-md-9">
                        <select name="rut_estudiante" class="form-control" id="nameid">
                            <option></option>
                            @foreach($estudiantes as $d)
                                <option value="{{$d->rut_estudiante}}">{{$d->rut_estudiante}} | {{$d->nombre_estudiante}} {{$d->apellido_paterno}} {{$d->apellido_materno}}</option>
                            @endforeach
                        </select>
                            <br>
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
                <br>
            </div>
        </div>
    </div>

    @if($estudianteMostrar != null)
        
        <form class="form-horizontal card" action="{{route('reportarSituacion.create')}}" method="put">
            <!--ACA FALTA VER LA RUTA, FALTA NOMBRE ASIGNATURA(LISTO), RUT ESTUDIANTE(LISTO), NOMBRE ESTUDIANTE(LISTO), TIPO(LISTO), DESCRIPCION(LISTO)-->
            
            <!---->
            @method('PACH')
            @csrf
            {{ csrf_field() }}
            {{method_field('PUT')}}
            <!---->
            
            <input type="hidden" id="rut_estudiante" name="rut_estudiante" value="{{$estudianteMostrar->rut_estudiante}}">
            <input type="hidden" id="nombre_estudiante" name="nombre_estudiante" value="{{$estudianteMostrar->nombre_estudiante}}">

            <div class="card-body">
                <table class="table">
                    <thead class="thead">
                        <tr class="bg-primary text-white">
                            <h5 class="card-title card col-md-2">Descripción</h5>
                            <textarea class="form-control" name="descripcion" maxlength="50" required placeholder="Ingrese aquí la descripción"></textarea>
                        </tr>
                        </theard>
                </table>
            </div>

            <div class="form-group row">
                <label for="tipo" class="col-md-4 col-form-label text-md-right">Tipo de situación:</label>
                <div class="col-md-6">
                    <select id="tipo" name="tipo" class="form-control">
                        <option value="academica">Académica</option>
                        <option value="personal">Personal</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="asignatura" class="col-md-4 col-form-label text-md-right">Asignatura:</label>
                <div class="col-md-6">
                    <select id="asignatura" name="asignatura" class="form-control">
                        @foreach($asignaturas as $asignatura) 
                            <option value="{{$asignatura->nombre_asignatura}}">{{$asignatura->nombre_asignatura}}</option> 
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="card-body">
                <button type="submit" class="btn btn-primary" style="float:right">Enviar Reporte</button>
            </div>
            
        </form>
    @endif
</div>

@endsection