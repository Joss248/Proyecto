@extends('layout.main_template')

@section('content')
<div class="container mt-5">
    <div class="card shadow">
        <div class="card-header text-bg-dark text-white">
            <h1 class="text-center mb-0">Detalles de la marca</h1>
        </div>
        <div class="card-body">
            <div class="row mb-3">
                <div class="col-md-6">
                    <h3 class="text-secondary">Marca:</h3>
                    <p class="fs-5">{{ $brand->brand }}</p>
                </div>
                <div class="col-md-6">
                    <h3 class="text-secondary">Descripción:</h3>
                    <p class="fs-5">{{ $brand->description}}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
