@extends('layout.main_template')

@section('content')
    <h2>Index Productos</h2>
    <br>
    <button><a href="{{route('products.create')}}">Crear Producto</a></button>
    <button><a href="{{route('brands.create')}}">Registrar Marcas</a></button>
    <br>
    <br>
<table>
    <thead>
        <th> Nombre del Producto </th>
        <th> Marca ID</th>
        <th> Cantidad </th>
        <th> Precio </th>
        <th> Imagen </th>
        <th> Acciones </th>
    </thead>
    <tbody>
        @foreach ($products as $p)
            <tr>
                <td>{{$p->nameProduct}}</td>
                <td>{{$p->brand_id}}</td>
                <td>{{$p->stock}}</td>
                <td>{{$p->unit_price}}</td>
                <td>{{$p->imagen}}</td>
                <td>
                    <button><a href="{{route("products.show", $p)}}">Mostrar</a></button>
                    <button><a href="{{route("products.edit", $p)}}">Editar</a></button>
                    <button><a href="{{route("products.delete", $p)}}">Eliminar</a></button>     
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection
