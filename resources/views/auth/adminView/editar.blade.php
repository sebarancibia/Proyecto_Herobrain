@extends('layouts.app')

@section('content')
<div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">{{ __('Editar Usuario') }}</div>

                            <div class="card-body">
                                <form method="POST" action="{{ route('adminMenu.update', $users) }}">
                                    @csrf @method('PATCH')

                                    <div class="form-group row">
                                        <label for="name" class="col-md-4 col-form-label text-md-right" >{{ __('Nombre') }}</label>

                                        <div class="col-md-6">
                                            <input id="name" type="text" value="{{$users->name}}" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                    
                                        
                                        <label for="rol_usuario" class="col-md-4 col-form-label text-md-right">Rol del usuario:</label>
                                        <select id="rol_usuario" name="rol_usuario" value="{{$users->rol_usuario}}" class="col-md-4 col-form-label text-md-right">
                                            <option value="administrador">Administrador</option>
                                            <option value="jefeCarrera">Jefe de Carrera</option>
                                            <option value="profesor">Profesor</option>
                                            <option value="secretaria">Secretaria</option>
                                        </select>
                

                                    </div>



                                    <div class="form-group row">
                                        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Correo') }}</label>

                                        <div class="col-md-6">
                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{$users->email}}" value="{{ old('email') }}" required autocomplete="email">

                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Nueva contraseña') }}</label>

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
                                            {{ __('Confirmar') }}
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