@extends('plantilla')
@section('seccion')
<br><br>
<h1> Carrito</h1>
<div>
    <table class="table">
        <thead>
            <tr>
                <th> Producto </th>
                <th> Cantidad </th>
                <th> </th>
                <th> Precio </th>
                <th> Importe </th>
                <th> </th>
            <tr>
        </thead>
        <tbody>
            @php
                $importeTotal = 0;
            @endphp
            @foreach($tablaCarrito as $producto)
            <tr>
                <form action="{{ route('actualizar_carrito') }}" method="POST">
                @csrf
                <th> {{ $producto->producto->nombre_producto }}</th>
                <th> {{ $producto->qty }}</th>
                <th><input type="hidden" id="id_producto" name="id_producto" value="{{ $producto->id_producto }}" > </th>
                <th> {{ $producto->producto->precio }}</th>
                @php
                    $importeTotal += ($producto->producto->precio) * ($producto->qty);
                @endphp
                <th> {{ ($producto->producto->precio) *  ($producto->qty) }} </th>
                <th><input type="number" style='width: 100px' min="0" class="form-control" id="qty" name="qty"></th>
                <th> <button type="submit" class="btn btn-primary"> Actualizar carrito</button> </th>
                </form>
            </tr>
            @endforeach
        </tbody>
    </table>
    Importe total: {{ $importeTotal }}
</div>
@endsection