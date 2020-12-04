@extends('layouts.app')

@section('content')

<form class="form-horizontal" id = "formEdit" action="" method="POST">
    @method('PATCH')
    @csrf
    <div class="container">
        <label for="rut_estudiante" class="col-md-4 control-label">RUT</label>

        <div class="col-md-6">
            <input id="rut_estudiante" type="rut_estudiante" class="form-control" name="rut_estudiante" value="">
        </div>
        <button class="btn btn-primary">Cambiar</button>
    </div>
</form>



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

                    @endforeach
            </tbody>
        </table>

    </div>
</div>

@endsection