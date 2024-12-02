@extends('layout.main_template')

@section('content')

@include('fragments.formstyles')

<h1> Editar Direcciones </h1>

<form action="{{route('addresses.update', $address->id)}}" method="POST">
    @csrf
    @method('PUT')
    <label for=""> Cliente </label>
    <br>
    <select name= "client_id">
        <option value="">Selecciona. . .</option>
        
        @foreach ( $clients as $client => $id)
        <option {{$address->client_id == $id ? 'selected': ''}} value="{{$id}}">{{$client}}</option>
        @endforeach

    </select>
    <br>
    <br>
    <label for=""> Calle </label>
    <input type="text" name= "street" value="{{$address->street}}">

    <label for=""> Numero Interno</label>
    <input type="number" name= "internal_num" value="{{$address->internal_num}}">

    <label for=""> Numero Externo</label>
    <input type="number" name= "external_num" value="{{$address->external_num}}">

    <label for=""> Vecindario </label>
    <input type="text" name= "neighborhood" value="{{$address->neighborhood}}">
    
    <label for=""> Ciudad </label>
    <input type="text" name= "town" value="{{$address->town}}">

    <label for=""> Estado</label>
    <input type="text" name= "state" value="{{$address->state}}">

    <label for=""> País </label>
    <input type="text" name= "country" value="{{$address->country}}">
    
    <label for=""> Código Postal </label>
    <input type="number" name= "postal_code" value="{{$address->postal_code}}">

    <label for=""> Referencias </label>
    <input type="text" name= "references" value="{{$address->references}}">

    <button type="submit"> Registrar </button>
</form>

@endsection