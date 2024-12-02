@extends('layout.main_template')

@section('content')
    <h2>Index Direcciones</h2>
    <br>
    <a type="button" class="btn btn-success" href="{{route('addresses.create')}}">Crear Dirección</a>
    <a type="button" class="btn btn-success" href="{{route('clients.create', ['from' => 'clients'])}}">Registrar Cliente</a>
    <br>
    <br>
<table class="table table-striped table-bordered">
    <thead>
        <th> Cliente </th>
        <th> Calle </th>
        <th> Numero Interno </th>
        <th> Numero Externo </th>
        <th> Vecindario </th>
        <th> Ciudad </th>
        <th> Estado </th>
        <th> País </th>
        <th> Código Postal </th>
        <th> Referencias </th>
        <th> Acciones </th>
    </thead>
    <tbody>
        @foreach ($addresses as $a)
            <tr>
                <td>{{$a->client->name}} {{$a->client->last_name}} {{$a->client->second_last_name}}</td>
                <td>{{$a->street}}</td>
                <td>{{$a->internal_num}}</td>
                <td>{{$a->external_num}}</td>
                <td>{{$a->neighborhood}}</td>
                <td>{{$a->town}}</td>
                <td>{{$a->state}}</td>
                <td>{{$a->country}}</td>
                <td>{{$a->postal_code}}</td>
                <td>{{$a->references}}</td>   
                <td>
                    <a type="button" class="btn btn-outline-primary" href="{{route("addresses.show", $a)}}">
                        <i class="fa-solid fa-eye"></i>
                    </a>
                    <a type="button" class="btn btn-outline-secondary" href="{{route("addresses.edit", $a)}}">
                        <i class="fa-solid fa-pen-to-square"></i>
                    </a>
                    <a type="button" class="btn btn-outline-danger" href="{{route("addresses.delete", $a)}}">
                        <i class="fa-solid fa-trash-can"></i>
                    </a>     
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
{{$addresses->links()}} <!-- Genera los enlaces de cada pagina -->
@endsection

