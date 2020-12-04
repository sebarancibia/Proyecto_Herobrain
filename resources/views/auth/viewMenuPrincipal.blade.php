@extends('layouts.app')

@section('content')

<div class="container">
    <div align='center'>
        <div class="col-5">
            <div class="panel-heading">
                <div class="card">
                    <br>
                    <br>
                    <h1>MENU</h1>
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
                    @if(auth::user()->rol1 == 'secretaria' or auth::user()->rol1 == 'jefeCarrera')
                    <a type="button" class="btn btn-outline-primary" style="margin-bottom:20px;float:right" href="import-form">Cargar Estudiantes</a>

                    <form method="put" action="{{ route ('menuPrincipal.show', auth::user() )}}">

                        @csrf

                        <button class="btn btn-outline-primary"> Editar Usuario</button>

                    </form>

                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection