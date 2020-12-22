@extends('layouts.app')

@section('content')

<!-- Muestra el menu administrador -->
<div class="container">
    <div align='center'>
        <div class="col-5">
            <div class="panel-heading">
                <div class="card">
                    <br>
                    <br>
                    <h1>MENÚ ADMINISTRADOR</h1>
                    <br>
                    <br>
                </div>
            </div>
        </div>
    </div>
</div>
@if(auth::user()->rol == 'administrador')
<div class="container">
    <div align='center'>
        <div class="col-5">
            <div class="panel-heading">
                <div class="card">
                    <a type="button" class="btn btn-outline-primary" style="margin-bottom:20px;float:right" href="register">Agregar Usuario</a>
                    <a type="button" class="btn btn-outline-primary" style="margin-bottom:20px;float:right" href="{{ route ('menuAdmin.show', auth::user()->id )}}">Editar Usuario</a>
                </div>
            </div>
        </div>
    </div>
</div>
@else
<br>
<div class="container">
    <div align='center'>
        <div class="col-5">
            <div  align='center'>
                <h5 class="card-title card col-md-8">No cuentas con el rol de administrador</h5>
            </div>
        </div>
    </div>
</div>
@endif
@endsection