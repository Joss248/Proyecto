@extends('layout.main_template')

@section('content')
    <h2>Index Productos</h2>
    <br>
    <a type="button" class="btn btn-success" href="{{route('products.create')}}">Crear Producto</a>
    <a type="button" class="btn btn-success" href="{{route('brands.create', ['from' => 'products'])}}">Registrar Marca</a>
    <br>
    <br>
<table class="table table-striped table-bordered">
    <thead>
        <th> Nombre del Producto </th>
        <th> Marca</th>
        <th> Descripción </th>
        <th> Cantidad </th>
        <th> Precio </th>
        <th> Imagen </th>
        <th> Acciones </th>
    </thead>
    <tbody>
        @foreach ($products as $p)
            <tr>
                <td>{{$p->nameProduct}}</td>
                <td>{{$p->brand->brand}}</td>
                <td>{{$p->brand->description}}</td>
                <td>{{$p->stock}}</td>
                <td>{{$p->unit_price}}</td>
                <td><img src="/image/products/{{$p->imagen}}" width="60" alt="Producto"></td>
                <td>
                    <a type="button" class="btn btn-outline-primary" href="{{route("products.show", $p)}}">
                        <i class="fa-solid fa-eye"></i>
                    </a>
                    <a type="button" class="btn btn-outline-secondary" href="{{route("products.edit", $p)}}">
                        <i class="fa-solid fa-pen-to-square"></i>
                    </a>
                    <a type="button" class="btn btn-outline-danger" href="{{route("products.delete", $p)}}">
                        <i class="fa-solid fa-trash-can"></i>
                    </a>     
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
{{$products->links()}} <!-- Genera los enlaces de cada pagina -->
@endsection
