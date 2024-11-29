@extends('layout.main_template')

@section('content')

@include('fragments.formstyles')

<h1> Create de Productos </h1>

@if ($errors->any())
    @foreach ($errors->all() as $e)
        <div class="error">
            {{{$e}}}
        </div>
    @endforeach
@endif

<form action="{{route('products.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <label for=""> Nombre del Producto </label>
    <input type="text" name= "nameProduct">

    <label for=""> Marca </label>
    <br>
    <select name= "brand_id">
        <option value="">Selecciona. . .</option>
         @foreach ( $brands as $brand => $id)
             <option value="{{$id}}">{{$brand}}</option>
         @endforeach

    </select>
    <br>
    <br>
    <label for=""> Cantidad </label>
    <input type="number" name= "stock">

    <label for=""> Precio Unitario</label>
    <input type="text" name= "unit_price">

    <label for=""> Imagen </label>
    <input type="file" name="imagen">

    <button type="submit"> Registrar </button>
</form>

@endsection