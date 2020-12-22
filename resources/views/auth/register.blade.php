@extends('layouts.app')

@section('content')

@guest
<div class="container">
    <h1>No tienes permiso para registrar a un usuario</h1>
</div>
@else
@if(auth::user()->rol=='administrador')

<div class="container">
    <a type="button" class="btn btn-outline-primary" style="margin-bottom:20px;float:left" href="{{ route ('menuAdmin.index')}}">Regresar menú principal</a>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Registrar Usuario') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nombre') }}</label>

                            <div class="col-md-6">
                                <input onkeypress="return /[a-z]/i.test(event.key)" id="name" type="int" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>


                                @error('name')

                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="rol" class="col-md-4 col-form-label text-md-right">Rol del usuario:</label>
                            <div class="col-md-6">
                                <select id="rol" name="rol" class="form-control">
                                    <option value="administrador">Administrador</option>
                                    <option value="jefeCarrera">Jefe de Carrera</option>
                                    <option value="jefeCarreraProfesor">Jefe de Carrera - Profesor</option>
                                    <option value="profesor">Profesor</option>
                                    <option value="secretaria">Secretaria</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="carrera" class="col-md-4 col-form-label text-md-right">Carrera dirigida:</label>
                            <div class="col-md-6">
                                <select id="carrera" name="carrera" class="form-control">
                                    <option value="ninguna" select>Ninguna</option>
                                    <option value="iEnComputacion">Ing. en computación e informática</option>
                                    <option value="iCivilComputacion">Ing. civil en computación e informática</option>
                                    <option value="industrial">Ing. industrial</option>
                                    <option value="comercial">Ing. comercial</option>
                                    <option value="comun">Ing. civil en plan común</option>
                                </select>
                            </div>
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

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Contraseña') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirmar contraseña') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Registrar') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@else
<div class='container'>
    <h1> Solo los administradores pueden registrar usuarios </h1>
</div>

@endif





@endguest


@endsection