@extends('layouts.app')

@section('content')

<div class="container">
    <a type="button" class="btn btn-outline-primary" style="margin-bottom:20px;float:left" href="{{ route ('menuAdmin.show', auth::user()->id )}}">Regresar vista tabla</a>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Editar Usuario') }}</div>

                <div class="card-body">
                    <form class="form-horizontal" action="{{route('menuAdmin.update', $users->id)}}" method="POST">
                        @method('PATCH')
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nombre') }}</label>

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
                            <label for="rol" class="col-md-4 col-form-label text-md-right">Rol del usuario:</label>
                            <div class="col-md-6">


                                <select id="rol" name="rol" class="form-control">
                                    @if($users->rol=='administrador')
                                    <option value="administrador" selected>Administrador</option>
                                    <option value="jefeCarrera">Jefe de Carrera</option>
                                    <option value="jefeCarreraProfesor">Jefe de Carrera - Profesor</option>
                                    <option value="profesor">Profesor</option>
                                    <option value="secretaria">Secretaria</option>
                                    @elseif($users->rol=='jefeCarrera')
                                    <option value="administrador">Administrador</option>
                                    <option value="jefeCarrera" selected>Jefe de Carrera</option>
                                    <option value="jefeCarreraProfesor">Jefe de Carrera - Profesor</option>
                                    <option value="profesor">Profesor</option>
                                    <option value="secretaria">Secretaria</option>
                                    @elseif($users->rol=='jefeCarreraProfesor')
                                    <option value="administrador">Administrador</option>
                                    <option value="jefeCarrera">Jefe de Carrera</option>
                                    <option value="jefeCarreraProfesor" selected>Jefe de Carrera - Profesor</option>
                                    <option value="profesor">Profesor</option>
                                    <option value="secretaria">Secretaria</option>
                                    @elseif($users->rol=='profesor')
                                    <option value="administrador">Administrador</option>
                                    <option value="jefeCarrera">Jefe de Carrera</option>
                                    <option value="jefeCarreraProfesor">Jefe de Carrera - Profesor</option>
                                    <option value="profesor" selected>Profesor</option>
                                    <option value="secretaria">Secretaria</option>
                                    @elseif($users->rol=='secretaria')
                                    <option value="administrador">Administrador</option>
                                    <option value="jefeCarrera">Jefe de Carrera</option>
                                    <option value="jefeCarreraProfesor">Jefe de Carrera - Profesor</option>
                                    <option value="profesor">Profesor</option>
                                    <option value="secretaria" selected>Secretaria</option>
                                    @endif
                                </select>

                            </div>



                        </div>



                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Correo') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $users->email }}" required autocomplete="email">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Actualizar') }}
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