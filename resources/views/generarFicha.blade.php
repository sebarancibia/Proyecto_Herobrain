@extends('layouts.app')
@section('content')
<div class="container">
    <a type="button" class="btn btn-outline-primary" style="margin-bottom:20px;float:left" href="http://127.0.0.1:8000/viewMenuPrincipal">Regresar menú principal</a>
    <div align='center'>
        <div class="col-5">
            <div class="card-header-pills card">
                <br>
                <h1>Ficha de Estudiante</h1>
                <br>
            </div>
            <br>
        </div>

    </div>
    <form class="form-horizontal" action="{{ route ('buscarEstudianteRut' )}}" method="post">
        @csrf
        <div class="container card">
            <br>
            <div class="row justify-content-md-center">
                <div class="col-md-6">
                    <h5 for="rut_estudiante" class="card-title">Ingrese RUT o Nombre del estudiante</h5>
                    <select name="rut_estudiante" class="form-control" id="nameid">
                        <option></option>
                        @foreach($estudiantes as $d)
                        <option value="{{$d->rut_estudiante}}">{{$d->rut_estudiante}} | {{$d->nombre_estudiante}} {{$d->apellido_paterno}} {{$d->apellido_materno}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <br>
            <div class="col-md-9">
                <button class=" btn btn-outline-primary " style="margin-bottom:20px;float:right" href="#">Buscar</button>
            </div>
        </div>
    </form>
</div>
<br>
<div class="container  card">
    <div class="container" align='center'>
        <table class="col-md-12 ">

            <div class="card-header-pills">
                <h1>Información del Estudiante</h1>
                <br>

            </div>
            @if($estudianteMostrar==null)

            <label class="col-md-4 control-label">Nombre del estudiante:</label>
            <label class="col-md-4 control-label">Apellido Paterno del estudiante:</label>
            <label class="col-md-4 control-label">Apellido Materno del estudiante:</label>
            <label class="col-md-4 control-label">Rut del estudiante:</label>
            <label class="col-md-4 control-label">Correo del estudiante:</label>

            @else

            <label class="col-md-4 control-label">Nombre del estudiante: {{$estudianteMostrar->nombre_estudiante}}</label>
            <label class="col-md-4 control-label">Apellido Paterno del estudiante: {{$estudianteMostrar->apellido_paterno}}</label>
            <label class="col-md-4 control-label">Apellido Materno del estudiante: {{$estudianteMostrar->apellido_materno}}</label>
            <label class="col-md-4 control-label">Rut del estudiante: {{$estudianteMostrar->rut_estudiante}}</label>
            <label class="col-md-8control-label">Correo del estudiante: {{$estudianteMostrar->correo_estudiante}}</label>

            @endif


            <br>
        </table>
    </div>
</div>
<br>

<!--AQUI SE DESPLIEGAN LAS FICHAS DE ATENCION-->
<div class="container card">
    <div class="card-header-pills">
        <h1>Registro de atenciones</h1>
        <br>

    </div>

    <table class="table col-md-10" align='center'>
        <thead class="thead-primary">
            <tr class="bg-primary text-white">
                <th scope="col">ID</th>
                <th scope="col">Fecha/Hora</th>
                <th scope="col">Descripción</th>
                <th scope="col">Acción</th>
            </tr>
        </thead>
        <tbody>
            @if($estudianteMostrar!=null)
                @foreach($atenciones as $atencion)
                
                    @if($estudianteMostrar->nombre_estudiante==$atencion->nombre_estudiante)
                       <tr>
                            <th scope="row">{{$atencion->id}}</th>
                            <td>{{$atencion->created_at}}</td>
                            <td>{{$atencion->descripcion}}</td>
                            <td>
                                
                                <form action="{{route('mostrarAtencion',$atencion->id)}}" method="get">
                                @csrf
                                <button class="btn btn-outline-primary">Ver detalles</button>
                                </form>
                            </td>
                        </tr> 
                    @endif

                @endforeach
            @endif
        </tbody>
    </table>
</div>
<br>

<!--AQUI SE DESPLIEGAN LAS FICHAS DE SITUACION-->
<div class="container card">
    <div class="card-header-pills">
        <h1>Registro de situaciones</h1>
        <br>

    </div>

    <table class="table col-md-10" align='center'>
        <thead class="thead-primary">
            <tr class="bg-primary text-white">
                <th scope="col">ID</th>
                <th scope="col">Fecha/Hora</th>
                <th scope="col">Descripción</th>
                <th scope="col">Acción</th>
            </tr>
        </thead>
        <tbody>
            @if($estudianteMostrar!=null)
            @foreach($situaciones as $situacion)

            @if($estudianteMostrar->nombre_estudiante == $situacion->nombre_estudiante)
            <tr>
                <th scope="row">{{$situacion->id}}</th>
                <td>{{$situacion->created_at}}</td>
                <td>{{$situacion->descripcion}}</td>
                <td>
                    <form action="{{ route ('mostrarSituacion',$situacion->id )}}" method="get">
                        @csrf
                        <button class="btn btn-outline-primary">Ver detalles</button>
                    </form>
                </td>
            </tr>
            @endif

            @endforeach
            @endif
        </tbody>
    </table>
</div>

@endsection