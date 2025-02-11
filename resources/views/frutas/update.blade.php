@extends('plantilla')
@section('contenido')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    <h4>Actualizar fruta</h4>
                </div>
                <div class="card-body">

                    <form action="{{ route('Frutas.update', $fruta->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label class="form-label" for="exampleFormControlInput1" required>Nombre</label>
                            <input type="text" name="nombre" value="{{$fruta->nombre}}" required class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="exampleDataList" class="form-label">Temporada</label>
                            <select name="temporada" class="custom-select custom-select-sm"  value="{{$fruta->temporada}}" aria-label="Default select example" multiple>
                                <option value="Primavera">Primavera</option>
                                <option value="Verano">Verano</option>
                                <option value="Otoño">Otoño</option>
                                <option value="Invierno">Invierno</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="typeNumber">Precio</label>
                            <input type="number" min="0,5" max="10" name="precio" value="{{$fruta->precio}}" required class="form-control">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="typeNumber">Stock</label>
                            <input type="number" min="10" max="100" name="stock" value="{{$fruta->stock}}" required class="form-control">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="customFile">Imágen</label>
                            <input type="text" name="image" class="course form-control" id="customFile"/>
                        </div>
                        <div class="mb-3">
                            <input type="submit" id="submit" name="btnSubir" value="Subir"> 
                        </div>
                    </form>

                </div>
            </div>

        </div>
    </div>
</div>

@endsection