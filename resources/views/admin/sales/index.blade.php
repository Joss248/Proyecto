@extends('layout.main_template')

@section('content')
    <h2>Index Ventas</h2>
    <br>
    <a type="button" class="btn btn-success" href="{{route('sales.create')}}">Crear venta</a>
    <a type="button" class="btn btn-success" href="{{route('clients.create', ['from' => 'sales'])}}">Registrar cliente</a>
    <a type="button" class="btn btn-success" href="{{route('products.create', ['from' => 'sales'])}}">Registrar producto</a>
    <br>
    <br>
<table class="table table-striped table-bordered">
    <thead>
        <th> Cliente </th>
        <th> Producto </th>
        <th> Fecha </th>
        <th> Acciones </th>
    </thead>
    <tbody>
        @foreach ($sales as $s)
            <tr>
                <td>{{$s->client->name}} {{$s->client->last_name}} {{$s->client->second_last_name}}</td>
                <td>{{$s->product->nameProduct}}</td>
                <td>{{$s->sale_date}}</td>
                <td>
                    <a type="button" class="btn btn-outline-primary" href="{{route("sales.show", $s)}}">
                        <i class="fa-solid fa-eye"></i>
                    </a>
                    <a type="button" class="btn btn-outline-secondary" href="{{route("sales.edit", $s)}}">
                        <i class="fa-solid fa-pen-to-square"></i>
                    </a>
                    <a type="button" class="btn btn-outline-danger" href="{{route("sales.delete", $s)}}">
                        <i class="fa-solid fa-trash-can"></i>
                    </a>     
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
{{$sales->links()}} <!-- Genera los enlaces de cada pagina -->
@endsection
