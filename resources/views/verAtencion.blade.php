@extends('layouts.app')

@section('content')

<div class="container">


    <div align='center'>
        <div class="col-5">
            <div class="card-header-pills card">
                <br>
                <h1>Detalle de Atención2</h1>
                <br>
            </div>
            <br>
        </div>
    </div>
    <div class="card-body align-content-center">
        <div class="btn-group-vertical">
            <a type="button" class="btn btn-outline-primary" style="margin-bottom:20px;float:left" href="{{ route ('indexAtencion')}}">Regresar</a>
            <a type="button" class="btn btn-outline-primary" style="margin-bottom:20px;float:left" href="http://127.0.0.1:8000/viewMenuPrincipal">Regresar menú principal</a>
        </div>
    </div>
    <div align='center'>
        <div class="container card col-md-10">
            <div card>
                <label class="col-md-4 control-label">Fecha/Hora {{$atenciones->created_at}}</label>
                <label class="col-md-4 control-label">Medio de la entrevista: {{$atenciones->medio}}</label>
                <label class="col-md-4 control-label">Nombre del estudiante: {{$atenciones->nombre_estudiante}}</label>
                <label class="col-md-4 control-label">Rut del estudiante: {{$atenciones->rut_estudiante}}</label>
                @if($atenciones->asignatura!="--")
                <label class="col-md-4 control-label">Asignatura: {{$atenciones->nombre_asignatura}}</label>
                <label class="col-md-4 control-label">Nombre del profesor: {{$atenciones->nombre_profesor}}</label>
                @endif
            </div>
            <br>
            <div class="container card">
                <h5 class="card-title">Descripción</h5>
                <label class="col-md-4 control-label">{{$atenciones->descripcion}}</label>

            </div>
            <br>
        </div>
    </div>
</div>

@endsection