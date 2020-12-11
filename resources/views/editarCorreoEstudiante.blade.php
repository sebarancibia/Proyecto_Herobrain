@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Editar Usuario</div>

                <div class="panel-body">
                    <form class="form-horizontal" action="{{route('viewMenuPrincipal.update', $estudiantes->id)}}" method="POST">
                        @method('PACH')
                        @csrf
                        {{ csrf_field() }}
                        {{method_field('PUT')}}

                        <div>
                            <label for="correo_estudiante" class="col-md-4 control-label">Nombre del Estudiante:</label>
                            <label for="correo_estudiante" class="col-md-4 control-label">{{$estudiantes->nombre_estudiante}}</label>
                            <label for="correo_estudiante" class="col-md-4 control-label">Apellido Paterno del Estudiante:</label>
                            <label for="correo_estudiante" class="col-md-4 control-label">{{$estudiantes->apellido_paterno}}</label>
                            <label for="correo_estudiante" class="col-md-4 control-label">Apellido Materno del Estudiante:</label>
                            <label for="correo_estudiante" class="col-md-4 control-label">{{$estudiantes->apellido_materno}}</label>
                            <label for="correo_estudiante" class="col-md-4 control-label">RUT del Estudiante:</label>
                            <label for="correo_estudiante" class="col-md-4 control-label">{{$estudiantes->rut_estudiante}}</label>
                        </div>

                        <div class="form-group{{ $errors->has('correo_estudiante') ? ' has-error' : '' }}">
                            <label for="correo_estudiante" class="col-md-4 control-label">Correo del Estudiante</label>

                            <div class="col-md-6">
                                <input id="$estudiantes->correo_estudiante" type="email" class="form-control @error('email') is-invalid @enderror"  required autocomplete="email" name="correo_estudiante" value="{{ $estudiantes->correo_estudiante}}">

                                
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Actualizar
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection