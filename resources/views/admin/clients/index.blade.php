@extends('layout.main_template')

@section('content')
    <h2>Index Clientes</h2>
    <br>
    <a type="button" class="btn btn-success" href="{{route('clients.create')}}">Crear cliente</a>
    <br>
    <br>
<table class="table table-striped table-bordered">
    <thead>
        <th> Nombre </th>
        <th> Apellido Paterno </th>
        <th> Apellido Materno </th>
        <th> Email </th>
        <th> Teléfono </th>
        <th> Acciones </th>
    </thead>
    <tbody>
        @foreach ($clients as $c)
            <tr>
                <td>{{$c->name}}</td>
                <td>{{$c->last_name}}</td>
                <td>{{$c->second_last_name}}</td>
                <td>{{$c->email}}</td>
                <td>{{$c->phone}}</td> 
                <td>
                    <a type="button" class="btn btn-outline-primary" href="{{route("clients.show", $c)}}">
                        <i class="fa-solid fa-eye"></i>
                    </a>
                    <a type="button" class="btn btn-outline-secondary" href="{{route("clients.edit", $c)}}">
                        <i class="fa-solid fa-pen-to-square"></i>
                    </a>
                    <a type="button" class="btn btn-outline-danger" href="{{route("clients.delete", $c)}}">
                        <i class="fa-solid fa-trash-can"></i>
                    </a>     
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
{{$clients->links()}} <!-- Genera los enlaces de cada pagina -->
@endsection

