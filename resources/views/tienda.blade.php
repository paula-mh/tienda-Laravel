@extends('plantilla')
@section('seccion')
<br><br>
<div class="container">
    <h2>Productos en la tienda</h2>
    <table class="table">
        <thead>
            <tr>
                <th> Nombre artículo</th>
                <th> Descripción</th>
                <th> Precio </th>
            <tr>
        </thead>
        <tbody>
            @foreach($tablaProductos as $producto)
            <tr>
                <form action="{{ route('guardar_carrito') }}" method="POST">
                @csrf
                <th> {{ $producto->nombre_producto }}</th>
                <th> {{ $producto->descripcion }}</th>
                <th> {{ $producto->precio }}</th>
                <th><input type="hidden" id="id" name="id" value="{{ $producto->id }}" > </th>
                <th> <button type="submit" class="btn btn-primary" >Añadir al carrito</button> </th>
                </form>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
<br><br>
<div class="container">
<h2> Añadir nuevo producto </h2>
    <form action="{{ route('guardar_ruta') }}" method="POST">
    @csrf

    <div class="form-group row">
        <label for="nombre_producto" class="col-sm-2 col-form-label"> Nombre producto </label>
        <div class="col-sm-3">
            <input type="text" class="form-control" id="nombre_producto" name="nombre_producto">
        </div>
    </div>

    <div class="form-group row">
        <label for="descripcion" class="col-sm-2 col-form-label"> Descripción </label>
        <div class="col-sm-3">
            <input type="text" class="form-control" id="descripcion" name="descripcion">
        </div>
    </div>

    <div class="form-group row">
        <label for="precio" class="col-sm-2 col-form-label">Precio </label>
        <div class="col-sm-3">
            <input type="number" step="any" class="form-control" id="precio" name="precio">
        </div>
    </div>

    <div class="form-group row">
        <div class="col-sm-3">
            <button type="submit" class="btn btn-primary">Enviar </button>
        </div>
    </div>
</div>

@endsection
