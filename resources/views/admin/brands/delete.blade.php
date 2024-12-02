@extends('layout.main_template')

@section('content')
<div class="container mt-5">
    <div class="card shadow">
        <div class="card-header bg-danger text-white">
            <h3 class="text-center">¿Estás seguro que quieres eliminar la marca?</h3>
        </div>
        <div class="card-body">
            <h4 class="text-center text-secondary">
                {{ $brand->brand }}
            </h4>
            <div class="text-center mt-4">
                <div class="d-flex justify-content-center gap-3">
                    <!-- Botón para cancelar -->
                    <form action="{{ route('brands.index') }}" method="GET">
                        <button type="submit" class="btn btn-dark">No</button>
                    </form>

                    <!-- Botón para confirmar eliminación -->
                    <form action="{{ route('brands.destroy', $brand->id) }}" method="POST">
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
