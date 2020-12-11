@extends('layouts.app')

@section('content')
<div class="container">
    <div align='center'>
        <div class="col-5">
            <div class="panel-heading">
                <div class="card">
                    <h1 class="panel-heading">Registrar Atención</h1>
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
                <form class="form-horizontal" action="{{ route ('reportarAtencion.edit', $estudiante->rut_estudiante )}}" method="put">
                    @csrf
                    <div class="container">
                        <br><br>
                        <h5 class="card-title card col-md-8">Ingrese RUT o Nombre del estudiante atendido</h5>
                        <br>
                        <div class="col-md-7">
                            <input id="rut_estudiante" type="text" class="form-control" name="rut_estudiante" value="Por favor busque el estudiante">
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

    @if($estudianteMostrar != null)
        
        <form class="form-horizontal" action="{{route('reportarAtencion.create')}}" method="put">
            <!--ACA FALTA VER LA RUTA, FALTA NOMBRE ASIGNATURA(LISTO), RUT ESTUDIANTE(LISTO), NOMBRE ESTUDIANTE(LISTO), MEDIO(listo), DESCRIPCION(LISTO), PROFESOR(listo)-->
            
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
                            <textarea class="form-control" name="descripcion" placeholder="Ingrese aquí la descripción"></textarea>
                        </tr>
                        </theard>
                </table>
            </div>

            <div class="form-group row">
                <label for="medio" class="col-md-4 col-form-label text-md-right">Medio de la entrevista:</label>
                <div class="col-md-6">
                    <select id="medio" name="medio" class="form-control">
                        <option value="personal">Entrevista Personal</option>
                        <option value="correo_electronico">Correo Electrónico</option>
                        <option value="otro">Otro</option>
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
            
            <div class="form-group row">
                <label for="profesor" class="col-md-4 col-form-label text-md-right">Profesor:</label>
                <div class="col-md-6">
                    <select id="profesor" name="profesor" class="form-control">
                        @foreach($usuarios as $usuario)
                            @if($usuario->rol=='profesor' or $usuario->rol=='jefeCarreraProfesor')
                                <option value="{{$usuario->name}}">{{$usuario->name}}</option> 
                            @endif
                        @endforeach
                    </select>
                </div>
            </div>
            <button type="submit" class="btn btn-primary" style="margin-bottom:20px;float:right">
                Enviar Reporte
            </button>
        </form>
    @endif
</div>

@endsection