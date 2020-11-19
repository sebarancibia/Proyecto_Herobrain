@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>
            </div>
                    @if(auth::user()->rol_usuario=='administrador')
                        <a href="menuAdmin" class="btn btn-primary btn-lg active" role="button" aria-pressed="true"> Siguiente</a>                    
                    @endif
                    
        </div>
    </div>
</div>
@endsection
