@extends('layouts.app')


@section('content')
<!-- pagina para desplegar tabla asignaturas-->

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Asignaturas</title>

</head>
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
@endsection