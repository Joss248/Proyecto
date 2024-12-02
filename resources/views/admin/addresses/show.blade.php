@extends('layout.main_template')

@section('content')
<div class="container mt-5">
    <div class="card shadow">
        <div class="card-header text-bg-dark text-white">
            <h1 class="text-center mb-0">Detalles de la Dirección</h1>
        </div>
        <div class="card-body">
            <div class="row mb-3">
                <div class="col-md-6">
                    <h3 class="text-secondary">Calle:</h3>
                    <p class="fs-5">{{$address->street}}</p>
                </div>
                <div class="col-md-6">
                    <h3 class="text-secondary">Numero Interno:</h3>
                    <p class="fs-5">{{$address->internal_num}}</p>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-6">
                    <h3 class="text-secondary">Numero Externo:</h3>
                    <p class="fs-5">{{$address->external_num}}</p>
                </div>
                <div class="col-md-6">
                    <h3 class="text-secondary">Vecindario:</h3>
                    <p class="fs-5">{{$address->neighborhood}}</p>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-6">
                    <h3 class="text-secondary">Ciudad:</h3>
                    <p class="fs-5">{{$address->town}}</p>
                </div>
                <div class="col-md-6">
                    <h3 class="text-secondary">Estado:</h3>
                    <p class="fs-5">{{$address->state}}</p>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-6">
                    <h3 class="text-secondary">País:</h3>
                    <p class="fs-5">{{$address->country}}</p>
                </div>
                <div class="col-md-6">
                    <h3 class="text-secondary">Código Postal:</h3>
                    <p class="fs-5">{{$address->postal_code}}</p>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-6">
                    <h3 class="text-secondary">Referencias:</h3>
                    <p class="fs-5">{{$address->references}}</p>
                </div>            
            </div>
        </div>
    </div>
</div>
@endsection