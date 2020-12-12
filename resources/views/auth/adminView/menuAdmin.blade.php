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
                    <h1>MENU ADMINISTRADOR</h1>
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
                    <a type="button" class="btn btn-outline-primary" style="margin-bottom:20px;float:right" href="register">Agregar Usuario</a>
                    <a type="button" class="btn btn-outline-primary" style="margin-bottom:20px;float:right" href="{{ route ('menuAdmin.show', auth::user()->id )}}">Editar Usuario</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection