@extends('layouts.app')
@section('content')
<div class="container">
    <a type="button" class="btn btn-outline-primary" style="margin-bottom:20px;float:left" href="http://127.0.0.1:8000/viewMenuPrincipal">Regresar menú principal</a>
    <div align='center'>
        <div class="col-5">
            <div class="card-header-pills card">
                <br>
                <h1>Ficha de Asignatura</h1>
                <br>
            </div>
            <br>
        </div>

    </div>

    <form class="form-horizontal" action="{{ route ('buscarAsignatura' )}}" method="post">
        @csrf
        <div class="container card">
            <br>
            <div class="row justify-content-md-center">
                <div class="col-md-6">
                    <h5 for="codigo_asignatura" class="card-title">Ingrese codigo o nombre de la Asignatura</h5>
                    <select name="codigo_asignatura" class="form-control" id="nameid">
                        <option></option>
                        @foreach($asignaturas as $d)
                        <option value="{{$d->codigo_asignatura}}">{{$d->codigo_asignatura}} | {{$d->nombre_asignatura}}</option>
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
    <br>
    <div class="container  card">
        <div class="container" align='center'>
            <table class="col-md-12 ">

                <div class="card-header-pills">
                    <h1>Información de la asignatura</h1>
                    <br>

                </div>
                @if($asignaturaMostrar==null)

                <label class="col-md-4 control-label">Nombre de la asignatura:</label>
                <label class="col-md-4 control-label">Codigo de la asignatura:</label>
                <label class="col-md-4 control-label">NRC:</label>

                @else

                <label class="col-md-4 control-label">Nombre de la asignatura: {{$asignaturaMostrar->nombre_asignatura}}</label>
                <label class="col-md-4 control-label">Codigo de la asignatura: {{$asignaturaMostrar->codigo_asignatura}}</label>
                <label class="col-md-4 control-label">NRC: {{$asignaturaMostrar->nrc}}</label>

                @endif


                <br>
            </table>
        </div>
    </div>

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
            @if($asignaturaMostrar!=null)
                @foreach($atenciones as $atencion)
                    @if($asignaturaMostrar->nombre_asignatura == $atencion->nombre_asignatura)
                       <tr>
                            <th scope="row">{{$atencion->id}}</th>
                            <td>{{$atencion->created_at}}</td>
                            <td>{{$atencion->descripcion}}</td>
                            <td>
                                <form action="{{ route ('mostrarAtencionAsignatura',$atencion->id )}}" method="get">
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

</div>

@endsection