@extends('layouts.app')

@section('content')
<div class="container">
    <div align='center'>
        <div class="col-5">
            <div class="panel-heading">
                <div class="card">
                    <h1 class="panel-heading">Reportar Situación</h1>
                </div>
            </div>
        </div>
    </div>

    @foreach($estudiantes as $estudiante)
    @endforeach

    <form class="form-horizontal" action="{{ route ('reportarSituacion.edit', $estudiante->rut_estudiante )}}" method="put">
        @csrf
        <div class="container">
            <label for="rut_estudiante" class="col-md-4 control-label">Ingrese RUT o Nombre a reportar</label>

            <div class="col-md-6">
                <input id="rut_estudiante" type="rut_estudiante" class="form-control" name="rut_estudiante" value="">
                <button class="btn btn-outline-primary" style="margin-bottom:20px;float:right" href="#">Buscar</button>
            </div>

        </div>
    </form>


    <div class="card-body">
        <table class="table">
            <thead class="thead">
                <tr class="bg-primary text-white">
                    
                @if($estudianteMostrar==null)
                <div class="card-body card ">
                    
                        <h5 class="card-title card">Información del Estudiante</h5>
                        <label class="col-md-8 control-label">Nombre del estudiante:</label>
                        <label class="col-md-8 control-label">Rut del estudiante:</label>
                        <label class="col-md-8 control-label">Nombre del estudiante:</label>
                    </div>
                    @else
                    <div class="card-body card ">
                        <h5 class="card-title card">Información del Estudiante</h5>
                    
                        <label class="col-md-8 control-label">Nombre del estudiante: {{$estudianteMostrar->nombre_estudiante}}</label>
                        <label class="col-md-8 control-label">Rut del estudiante: {{$estudianteMostrar->rut_estudiante}}</label>
                        <label class="col-md-8 control-label">Nombre del estudiante: {{$estudianteMostrar->nombre_estudiante}}</label>
                    </div>
                    
                    @endif  
                    
                
                <label for="rut_estudiante" class="col-md-8 control-label">Decripcion</label>
                    <textarea class="form-control" name="descripcion"></textarea>
                    
                </tr>
                </theard>
        </table>
    </div>
</div>

<style type="text/css">
#header {
    width: 100%;
    background-color: red;
    height: 30px;
}

#container {
    width: 300px;
    background-color: #ffcc33;
    margin: auto;
}
#first {
    width: 100px;
    float: left;
    height: 300px;
        background-color: blue;
}
#second {
    width: 200px;
    float: left;
    height: 300px;
    background-color: green;
}
#clear {
    clear: both;
}
</style>

<div id="header" ></div>
<div id="container">
    <div id="first"><h1>hola</h1></div>
    
    <div id="second"><h1>bye</h1></div>
    <div id="clear"><h1>micro</h1></div>
</div>
@endsection