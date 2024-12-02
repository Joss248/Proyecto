@extends('layout.main_template')

@section('content')

@include('fragments.formstyles')

<h1> Editar Marca </h1>

<form action="{{route('brands.update', $brand->id)}}" method="POST">
    @csrf
    @method('PUT')
    <label for=""> Marca </label>
    <input type="text" name= "brand" value="{{$brand->brand}}">

    <label for=""> Descripción </label>
    <input type="text" name= "description" value="{{$brand->description}}">

    <button type="submit"> Registrar </button>  
</form>

@endsection