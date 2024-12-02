@extends('layout.main_template')

@section('content')

@include('fragments.formstyles')

<h1> Create de Direcciones </h1>

@if ($errors->any())
    @foreach ($errors->all() as $e)
        <div class="error">
            {{{$e}}}
        </div>
    @endforeach
@endif

<form action="{{route('addresses.store')}}" method="POST">
    @csrf
    <label for=""> Cliente </label>
    <br>
    <select name= "client_id">
        <option value="">Selecciona. . .</option>
         @foreach ( $clients as $client => $id)
             <option value="{{$id}}">{{$client}}</option>
         @endforeach

    </select>
    <br>
    <br>

    <label for=""> Calle </label>
    <input type="text" name= "street">

    <label for=""> Numero Interno </label>
    <input type="number" name= "internal_num">

    <label for=""> Numero Externo</label>
    <input type="number" name= "external_num">

    <label for=""> Vecindario </label>
    <input type="text" name= "neighborhood">

    <label for=""> Ciudad </label>
    <input type="text" name= "town">

    <label for=""> Estado </label>
    <input type="text" name= "state">

    <label for=""> País </label>
    <input type="text" name= "country">

    <label for=""> Código Postal </label>
    <input type="number" name= "postal_code">

    <label for=""> Referencias </label>
    <input type="text" name= "references">

    <button type="submit"> Registrar </button>
</form>

@endsection