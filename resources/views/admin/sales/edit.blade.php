@extends('layout.main_template')

@section('content')

@include('fragments.formstyles')

<h1> Editar Ventas </h1>

<form action="{{route('sales.update', $sale->id)}}" method="POST">
    @csrf
    @method('PUT')
    
    <label for=""> Cliente </label>
    <br>
    <select name= "client_id">
        <option value="">Selecciona. . .</option>  
        @foreach ( $clients as $client => $id)
        <option {{$sale->client_id == $id ? 'selected': ''}} value="{{$id}}">{{$client}}</option>
        @endforeach
    </select>
    <br>
    <br>

    
    <label for=""> Producto</label>
    <br>
    <select name= "product_id">
        <option value="">Selecciona. . .</option>  
        @foreach ( $products as $product => $id)
        <option {{$sale->product_id == $id ? 'selected': ''}} value="{{$id}}">{{$product}}</option>
        @endforeach
    </select>
    <br>
    <br>

    <label for=""> Fecha</label>
    <input type="date" name= "sale_date" value="{{$sale->sale_date}}">


    <button type="submit"> Registrar </button>
</form>

@endsection