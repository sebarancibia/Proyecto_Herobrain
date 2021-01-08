@extends('layouts.app')


@section('content')
<!-- pagina para desplegar tabla asignaturas-->

<div class="container">
    <div align='center'>
        <div class="col-5 card">
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
                <a type="button" class="btn btn-outline-primary" style="margin-bottom:20px;float:left" href="viewMenuPrincipal">Regresar menú principal</a>
            </div>
        </div>
<table class="table">
  <thead class="bg-primary text-white">
    <tr>
      <th scope="col">Código</th>
      <th scope="col">NRC</th>
      <th scope="col">Nombre</th>
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