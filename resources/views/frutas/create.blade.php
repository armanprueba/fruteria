@extends('plantilla')
@section('contenido')
@if(auth()->check())
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    <h4>Fruta</h4>
                </div>
                <div class="card-body">

                    <form action="{{ route('Frutas.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="mb-3">
                            <label class="form-label" for="exampleFormControlInput1" required>Nombre</label>
                            <input type="text" name="nombre" required class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="exampleDataList" class="form-label">Temporada</label>
                            <select name="temporada" class="custom-select custom-select-sm" aria-label="Default select example" multiple>
                                <option value="Primavera">Primavera</option>
                                <option value="Verano">Verano</option>
                                <option value="Otoño">Otoño</option>
                                <option value="Invierno">Invierno</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="typeNumber">Precio</label>
                            <input type="float" min="0,5" max="10" name="precio" required class="form-control">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="typeNumber">Stock</label>
                            <input type="number" min="10" max="100" name="stock" required class="form-control">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="customFile">Imágen</label>
                            <input type="text" name="imagen" required class="form-control">
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
@endif
@endsection