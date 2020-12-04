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
                                <input id="$users->name" type="text" class="form-control" name="name" value="{{ $users->name}}">

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        
                        <div class="form-cheack col-md-4">{{ __('Rol') }}
                        <br>
                        <input type="checkbox" name="rol1" value="administrador">
                        <label >administrador</label>
                        <br>
                        <input type="checkbox" name="rol1"  value="profesor">
                        <label >Profesor</label>
                        <br>
                        <input type="checkbox" name="rol1" value="secretaria">
                        <label >secretaria</label>
                        <br>
                        <input type="checkbox" name="rol1" value="jefe de carrera">
                        <label >jefe de carrera</label>
                        </div>


                       

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">Email</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ $users->email }}">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
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