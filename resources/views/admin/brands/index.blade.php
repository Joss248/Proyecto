@extends('layout.main_template')

@section('content')
    <h2>Index Marcas</h2> 
    <br>
    <a type="button" class="btn btn-success" href="{{route('brands.create')}}">Crear Marca</a>
    <br>
    <br>
<table class="table table-striped table-bordered">
    <thead>
        <th> Marca</th>
        <th> Descripción </th>
        <th> Acciones </th>
    </thead>
    <tbody>
        @foreach ($brands as $b)
            <tr>
                <td>{{$b->brand}}</td>
                <td>{{$b->description}}</td>
                <td>
                    <a type="button" class="btn btn-outline-primary" href="{{route("brands.show", $b)}}">
                        <i class="fa-solid fa-eye"></i>
                    </a>
                    <a type="button" class="btn btn-outline-secondary" href="{{route("brands.edit", $b)}}">
                        <i class="fa-solid fa-pen-to-square"></i>
                    </a>
                    <a type="button" class="btn btn-outline-danger" href="{{route("brands.delete", $b)}}">
                        <i class="fa-solid fa-trash-can"></i>
                    </a>     
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
{{$brands->links()}} <!-- Genera los enlaces de cada pagina -->
@endsection