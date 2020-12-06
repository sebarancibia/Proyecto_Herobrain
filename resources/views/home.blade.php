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
                    @if(auth::user()->rol=='administrador')
                        <META HTTP-EQUIV="REFRESH" CONTENT="0;URL=http://127.0.0.1:8000/menuAdmin">
                    @else
                        <META HTTP-EQUIV="REFRESH" CONTENT="0;URL=http://127.0.0.1:8000/viewMenuPrincipal">
                    @endif
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection