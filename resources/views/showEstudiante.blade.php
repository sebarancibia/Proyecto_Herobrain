@extends('layouts.app')

@section('content')

<div class="container">
    <a type="button" class="btn btn-outline-primary" style="margin-bottom:20px;float:left" href="http://127.0.0.1:8000/viewMenuPrincipal">Regresar menú principal</a>
    <div align='center'>
        <div class="col-5">
            <div class="card-header-pills card">
                <br>
                <h1>Editar Correo Estudiante</h1>
                <br>
            </div>
            <br>
        </div>
       
    </div>
    <form class="form-horizontal" action="{{ route ('editEstudianteRut' )}}" method="post">
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
                <button class=" btn btn-outline-primary " style="margin-bottom:20px;float:right" href="#">Editar</button>
            </div>
        </div>
    </form>
</div>

<script type="text/javascript">

      $("#nameid").select2({
            placeholder: "Seleccione un nombre",
            allowClear: true
        });
</script>

<!-- CAMBIAR VISUAL-->
<div class="panel-body">
    <div class="card-body">
        <table class="table">
            <thead class="thead">
                <tr class="bg-primary text-white">
                    <th scope="col">Rut</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido Paterno</th>
                    <th scope="col">Apellido Materno</th>
                    <th scope="col">Email</th>
                </tr>
            </thead>
            <tbody>

                @foreach($estudiantes as $estudiante)
                <tr>
                    <th scope="row">{{$estudiante->rut_estudiante}}</th>
                    <td>{{$estudiante->nombre_estudiante}}</td>
                    <td>{{$estudiante->apellido_paterno}}</td>
                    <td>{{$estudiante->apellido_materno}}</td>
                    <td>{{$estudiante->correo_estudiante}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>
</div>


@endsection