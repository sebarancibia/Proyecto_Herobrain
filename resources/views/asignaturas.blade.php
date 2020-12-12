@extends('layouts.app')


@section('content')
<!-- pagina para desplegar tabla asignaturas-->

<div class="container">
    <div align='center'>
        <div class="col-5">
            <div class="card-header-pills">
                <h1>Tabla Asignaturas</h1>
            </div>
        </div>
    </div>
</div>

<div class="panel-body">
    <div class="card-body">
        <div class="card-body align-content-center">
            <div class="btn-group-vertical">
                <a type="button" class="btn btn-outline-primary" style="margin-bottom:20px;float:left" href="{{ url()->previous() }}">Regresar cargar asignaturas</a>
                <a type="button" class="btn btn-outline-primary" style="margin-bottom:20px;float:left" href="viewMenuPrincipal">Regresar menu principal</a>
            </div>
        </div>
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">CODIGO</th>
      <th scope="col">NRC</th>
      <th scope="col">NOMBRE</th>
    </tr>
  </thead>
  <tbody>
      @foreach ($asignaturas as $asi)
      <tr>
        <td>{{$asi->codigo_asignatura}}</td>
        <td>{{$asi->nrc}}</td>
        <td>{{$asi->nombre_asignatura}}</td>
      </tr>
      @endforeach
  </tbody>
</table>
</div>
</div>
@endsection