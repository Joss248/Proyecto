@extends('layout.main_template')

@section('content')
<div class="container mt-5">
    <div class="card shadow">
        <div class="card-header text-bg-dark text-white">
            <h1 class="text-center mb-0">Detalles del Producto</h1>
        </div>
        <div class="card-body">
            <div class="row mb-3">
                <div class="col-md-6">
                    <h3 class="text-secondary">Producto:</h3>
                    <p class="fs-5">{{$product->nameProduct}}</p>
                </div>
                <div class="col-md-6">
                    <h3 class="text-secondary">Cantidad:</h3>
                    <p class="fs-5">{{$product->stock}}</p>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-6">
                    <h3 class="text-secondary">Precio:</h3>
                    <p class="fs-5">{{$product->unit_price}}</p>
                </div>
                <div class="col-md-6">
                    <h3 class="text-secondary">Imagen:</h3>
                    <p class="fs-5"><img src="/image/products/{{$product->imagen}}" width="100" alt="Producto"></p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
