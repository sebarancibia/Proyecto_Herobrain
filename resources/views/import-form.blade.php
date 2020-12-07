@extends('layouts.app')
@section('content')
<a type="button" class="btn btn-outline-primary" style="margin-bottom:20px;float:left" href="viewMenuPrincipal">VOLVER</a>
<a type="button" class="btn btn-outline-primary" style="margin-bottom:20px;float:right" href="get-all-estudiante">VER TABLA ACTUAL</a>
<div class="container">
    <div align='center'>
        <div class="col-5">
            <div class="panel-heading">
                <div class="card">
                    <br>
                    <br>
                    <h1>CARGAR ESTUDIANTES</h1>
                    <br>
                    <br>
                </div>
            </div>
        </div>
    </div>
</div>
    <div class="container" style="padding-top:80px;">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <form action="{{route("import2", $post ?? '')}}" method="POST" enctype="multipart/form-data"> 
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                        <label for="file2">Seleccione archivo Excel para importar a la tabla de estudiantes.</label> 
                        <input type="file" name="file2" class="form-control" /> 
                    </div>
                    <input type="submit" class="btn btn-primary" value="Enviar" /> <!-- boton para enviar-->
            </div>
        </div>
    </div>
@endsection