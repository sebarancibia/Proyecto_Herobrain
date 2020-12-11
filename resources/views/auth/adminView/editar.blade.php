@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Editar Usuario</div>

                <div class="panel-body">
                    <!--Metodo que recibe nuevos datos de un usuario para posteriomente editarlos en el metodo edit de menuAdmin -->
                    <form class="form-horizontal" action="{{route('menuAdmin.update', $users->id)}}" method="POST">
                        @method('PACH')
                        @csrf



                        {{ csrf_field() }}
                        {{method_field('PUT')}}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Nombre</label>

                            <div class="col-md-6">
                                <input onkeypress="return /[a-z]/i.test(event.key)" id="$users->name" type="text" class="form-control" name="name" value="{{ $users->name}}">

                                @if ($errors->has('name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('username') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group row">

                            <label for="rol" class="col-md-4 col-form-label "value="{{ $users->name}}">Rol del usuario:</label>
                            <select id="rol" name="rol" class="col-md- col-form-label ">
                                
                                @if($users->rol=='administrador')
                                    <option value="administrador"selected>Administrador</option>
                                    <option value="jefeCarrera">Jefe de Carrera</option>
                                    <option value="jefeCarreraProfesor" >Jefe de Carrera - Profesor</option>
                                    <option value="profesor">Profesor</option>
                                    <option value="secretaria">Secretaria</option>
                                    @elseif($users->rol=='jefeCarrera')
                                        <option value="administrador">Administrador</option>
                                        <option value="jefeCarrera"selected>Jefe de Carrera</option>
                                        <option value="jefeCarreraProfesor" >Jefe de Carrera - Profesor</option>
                                        <option value="profesor">Profesor</option>
                                        <option value="secretaria">Secretaria</option>
                                        @elseif($users->rol=='jefeCarreraProfesor')
                                            <option value="administrador">Administrador</option>
                                            <option value="jefeCarrera" >Jefe de Carrera</option>
                                            <option value="jefeCarreraProfesor"selected >Jefe de Carrera - Profesor</option>
                                            <option value="profesor">Profesor</option>
                                            <option value="secretaria">Secretaria</option>
                                                @elseif($users->rol=='profesor')
                                                <option value="administrador">Administrador</option>
                                                <option value="jefeCarrera" >Jefe de Carrera</option>
                                                <option value="jefeCarreraProfesor" >Jefe de Carrera - Profesor</option>
                                                <option value="profesor"selected>Profesor</option>
                                                <option value="secretaria">Secretaria</option>
                                                    @elseif($users->rol=='secretaria')
                                                        <option value="administrador">Administrador</option>
                                                        <option value="jefeCarrera" >Jefe de Carrera</option>
                                                        <option value="jefeCarreraProfesor">Jefe de Carrera - Profesor</option>
                                                        <option value="profesor">Profesor</option>
                                                        <option value="secretaria"selected>Secretaria</option>
                                @endif
                            </select>
                        </div>



                        <div class="form-group row">
                                        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Correo') }}</label>

                                        <div class="col-md-6">
                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
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