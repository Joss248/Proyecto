@extends('layout.main_template')

@section('content')
<div class="container mt-5">
    <div class="card shadow">
        <div class="card-header text-bg-dark text-white">
            <h1 class="text-center mb-0">Detalles de la venta</h1>
        </div>
        <div class="card-body">
            <div class="row mb-3">
                <div class="col-md-6">
                    <h3 class="text-secondary">Cliente:</h3>
                    <p class="fs-5">{{$sale->client->name}} {{$sale->client->last_name}} {{$sale->client->second_last_name}}</p>
                </div>
                <div class="col-md-6">
                    <h3 class="text-secondary">Producto:</h3>
                    <p class="fs-5">{{$sale->product->nameProduct}}</p>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-6">
                    <h3 class="text-secondary">fecha:</h3>
                    <p class="fs-5">{{$sale->sale_date}}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection