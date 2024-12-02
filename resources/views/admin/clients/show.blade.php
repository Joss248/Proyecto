@extends('layout.main_template')

@section('content')
<div class="container mt-5">
    <div class="card shadow">
        <div class="card-header text-bg-dark text-white">
            <h1 class="text-center mb-0">Detalles del Cliente</h1>
        </div>
        <div class="card-body">
            <div class="row mb-3">
                <div class="col-md-6">
                    <h3 class="text-secondary">Nombre:</h3>
                    <p class="fs-5">{{ $client->name }}</p>
                </div>
                <div class="col-md-6">
                    <h3 class="text-secondary">Apellido Paterno:</h3>
                    <p class="fs-5">{{ $client->last_name }}</p>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-6">
                    <h3 class="text-secondary">Apellido Materno:</h3>
                    <p class="fs-5">{{ $client->second_last_name }}</p>
                </div>
                <div class="col-md-6">
                    <h3 class="text-secondary">Email:</h3>
                    <p class="fs-5">{{ $client->email }}</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h3 class="text-secondary">Teléfono:</h3>
                    <p class="fs-5">{{ $client->phone }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection