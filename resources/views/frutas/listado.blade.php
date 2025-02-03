<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
@extends('plantilla')
@section('titulo', 'Listado de libros')
@section('contenido')
<h1>Listado de libros</h1>
<table>
<tr>
    <th>ID</th>
    <th>Nombre</th>
    <th>Temporada</th>
    <th>Precio</th>
    <th>Stock</th>
    <th>Action</th>
</tr>
<ul>
@forelse ($frutas as $fruta)
<tr>
    <td>$fruta->id</td>
    <td>$fruta->nombre</td>
    <td>$fruta->temporada</td>
    <td>$fruta->precio</td>
    <td>$fruta->stock</td>
    <td>
        <a href="{{ route('update', $fruta->id) }}">Actualizar</a>
        <a href="{{ route('destroy', $fruta->id) }}">Borrar</a>
    </td>
@empty
<li>No hay frutas</li>
@endforelse </tr>
</table>
@endsection
</body>
</html>