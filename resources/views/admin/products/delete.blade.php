@extends('layout.main_template')

@section('content')
<div class="container mt-5">
    <div class="card shadow">
        <div class="card-header bg-danger text-white">
            <h3 class="text-center">¿Estás seguro que quieres eliminar el producto?</h3>
        </div>
        <div class="card-body">
            <h4 class="text-center text-secondary">
                {{$product->nameProduct}}
            </h4>
            <div class="text-center mt-4">
                <div class="d-flex justify-content-center gap-3">
                    <!-- Botón para cancelar -->
                    <form action="{{route('products.index')}}" method="GET">
                        <button type="submit" class="btn btn-dark">No</button>
                    </form>

                    <!-- Botón para confirmar eliminación -->
                    <form action="{{route('products.destroy', $product->id)}}" method="POST">
                        @method("DELETE")
                        @csrf
                        <button type="submit" class="btn btn-danger">Sí</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
