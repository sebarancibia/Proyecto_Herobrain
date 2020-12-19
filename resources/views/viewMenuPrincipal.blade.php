@extends('layouts.app')

@section('content')

<div class="container">
    <div align='center'>
        <div class="col-5">
            <div class="panel-heading">
                <div class="card">
                    <br>
                    <br>
                    <h1>MENÚ</h1>
                    <br>
                    <br>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div align='center'>
        <div class="col-5">
            <div class="panel-heading">
                <div class="card">
                    @if(auth::user()->rol == 'jefeCarrera')
                        <a type="button" class="btn btn-outline-primary" style="margin-bottom:20px;float:right" href="import-form">Cargar Estudiantes</a>
                        
                        <a type="button" class="btn btn-outline-primary" style="margin-bottom:20px;float:right" href="import-form-asignaturas">Cargar Asignaturas</a>

                        <a type="button" class="btn btn-outline-primary" style="margin-bottom:20px;float:right" href="{{ route ('showEditEstudiante') }}">Editar Estudiante</a>

                        <a type="button" class="btn btn-outline-primary" style="margin-bottom:20px;float:right" href="{{ route ('reportarAtencion.show', auth::user() )}}">Registrar Atención</a>

                        <a type="button" class="btn btn-outline-primary" style="margin-bottom:20px;float:right" href="{{ route ('fichaController.index')}}">Ver fichas de estudiantes</a>

                    @endif
                    @if(auth::user()->rol == 'secretaria')
                        <a type="button" class="btn btn-outline-primary" style="margin-bottom:20px;float:right" href="import-form">Cargar Estudiantes</a>
                        
                        <a type="button" class="btn btn-outline-primary" style="margin-bottom:20px;float:right" href="import-form-asignaturas">Cargar Asignaturas</a>

                        <a type="button" class="btn btn-outline-primary" style="margin-bottom:20px;float:right" href="{{ route ('showEditEstudiante') }}">Editar Estudiante</a>

                        <a type="button" class="btn btn-outline-primary" style="margin-bottom:20px;float:right" href="{{ route ('reportarAtencion.show', auth::user() )}}">Registrar Atención</a>

                    @endif
                    @if(auth::user()->rol == 'profesor')
                        <a type="button" class="btn btn-outline-primary" style="margin-bottom:20px;float:right" href="{{ route ('reportarSituacion.show', auth::user() )}}">Reportar Situación</a>
                    @endif
                    @if(auth::user()->rol == 'jefeCarreraProfesor')
                        <a type="button" class="btn btn-outline-primary" style="margin-bottom:20px;float:right" href="import-form">Cargar Estudiantes</a>
                        
                        <a type="button" class="btn btn-outline-primary" style="margin-bottom:20px;float:right" href="import-form-asignaturas">Cargar Asignaturas</a>

                        <a type="button" class="btn btn-outline-primary" style="margin-bottom:20px;float:right" href="{{ route ('showEditEstudiante') }}">Editar Estudiante</a>

                        <a type="button" class="btn btn-outline-primary" style="margin-bottom:20px;float:right" href="{{ route ('reportarAtencion.show', auth::user() )}}">Registrar Atención</a>

                        <a type="button" class="btn btn-outline-primary" style="margin-bottom:20px;float:right" href="{{ route ('fichaController.index')}}">Ver fichas de estudiantes</a>

                        <a type="button" class="btn btn-outline-primary" style="margin-bottom:20px;float:right" href="{{ route ('reportarSituacion.show', auth::user() )}}">Reportar Situación</a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection