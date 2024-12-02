@extends('layout.main_template')

@section('content')

@include('fragments.formstyles')

<h1> Create de Clientes </h1>

@if ($errors->any())
    @foreach ($errors->all() as $e)
        <div class="error">
            {{{$e}}}
        </div>
    @endforeach
@endif

<form action="{{route('clients.store')}}" method="POST">
    @csrf
    <input type="hidden" name="from" value="{{ request('from') }}">
    <label for=""> Nombre del cliente </label>
    <input type="text" name= "name">

    <label for=""> Apellido Paterno </label>
    <input type="text" name= "last_name">
    
    <label for=""> Apellido Materno </label>
    <input type="text" name= "second_last_name">

    <label for=""> Email </label>
    <input type="email" name= "email">

    <label for=""> Teléfono </label>
    <input type="text" name= "phone">

    <button type="submit"> Registrar </button>
</form>

@endsection