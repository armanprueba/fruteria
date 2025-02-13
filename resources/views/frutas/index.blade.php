@extends('plantilla')
@section('titulo', 'Listado de frutas')
@section('contenido')
<h1>Listado de frutas</h1>
<table class="table table-dark">
<tr>
    <th>ID</th>
    <th>Nombre</th>
    <th>Temporada</th>
    <th>Precio</th>
    <th>Stock</th>
    <th>Imágen</th>
    @if(auth()->check())
    <th>ACCION</th>
    @endif
</tr>
<ul>
@forelse ($frutas as $fruta)
<tr>
    <td>{{$fruta->id}}</td>
    <td>{{$fruta->nombre}}</td>
    <td>{{$fruta->temporada}}</td>
    <td>{{$fruta->precio}}</td>
    <td>{{$fruta->stock}}</td>

    <td><img src="{{ $fruta->imagen }}" alt="{{ $fruta->nombre }}" class="rounded-circle" width="100" height="100"></td>
    @if(auth()->check())
    <td>
        <form action="{{ route('Frutas.edit', $fruta->id) }}">
            @csrf
            @method('PUT')
            <button>Actualizar</button>
        </form>
        <form action="{{ route('Frutas.destroy', $fruta->id) }}" method="POST">
            @method('DELETE')
            @csrf
            <button>Borrar</button>
        </form>
    </td>
    @endif
    
@empty
<li>No hay frutas</li>
@endforelse 
</tr>
</table>
@endsection
