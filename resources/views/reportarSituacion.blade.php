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

    <div class="container card">

        <form  class="form-horizontal" id="formEdit" action="" method="POST">
            @method('PATCH')
            @csrf
            <div class="side-bar">
                <label for="rut_estudiante" class="col-md-6 control-label">RUT</label>

                <div class="col-md-4">
                    <input id="rut_estudiante" type="rut_estudiante" class="form-control" name="rut_estudiante" value="">
                    <button class="btn btn-primary">Cambiar</button>
                </div>
<div class="container_2 " align='center'>
                <span class="center card">Center</span>
            </div>
            </div>
            
        </form>

        
    </div>
    

    @endsection