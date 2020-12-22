@extends('layouts.app')

@section('content')

<div class="container">
<div class="btn-group-vertical">
    <a type="button" class="btn btn-outline-primary" style="margin-bottom:20px;float:left" href="http://127.0.0.1:8000/showEditEstudiante">Regresar</a>
    <a type="button" class="btn btn-outline-primary" style="margin-bottom:20px;float:left" href="http://127.0.0.1:8000/viewMenuPrincipal">Regresar menú principal</a>
</div>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Editar Correo Estudiante') }}</div>

                <div class="card-body">
                    <form class="form-horizontal" action="{{route('viewMenuPrincipal.update', $estudiantes->id)}}" method="POST">
                        @method('PACH')
                        @csrf
                        {{ csrf_field() }}
                        {{method_field('PUT')}}

                        <div>
                            <label for="correo_estudiante" class="col-md-4 control-label">Nombre del Estudiante:</label>
                            <label for="correo_estudiante" class="col-md-4 control-label">{{$estudiantes->nombre_estudiante}}</label>
                            <label for="correo_estudiante" class="col-md-4 control-label">Apellido Paterno:</label>
                            <label for="correo_estudiante" class="col-md-4 control-label">{{$estudiantes->apellido_paterno}}</label>
                            <label for="correo_estudiante" class="col-md-4 control-label">Apellido Materno:</label>
                            <label for="correo_estudiante" class="col-md-4 control-label">{{$estudiantes->apellido_materno}}</label>
                            <label for="correo_estudiante" class="col-md-4 control-label">RUT del Estudiante:</label>
                            <label for="correo_estudiante" class="col-md-4 control-label">{{$estudiantes->rut_estudiante}}</label>
                        </div>

                        <div class="form-group{{ $errors->has('correo_estudiante') ? ' has-error' : '' }}">
                            <label for="correo_estudiante" class="col-md-4 control-label">Correo del Estudiante</label>

                            <div class="col-md-6">
                                <input id="email" class="form-control" name="email" value="{{ $estudiantes->correo_estudiante}}" type="email" class="form-control @error('email') is-invalid @enderror"  required autocomplete="correo_estudiante">


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