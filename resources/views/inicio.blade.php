@extends('plantilla')
@section('seccion')
<center><h1> Programación de una Tienda Virtual usando un Framework </h1>

¡Bienvenido a la práctica DWES06 | Programación de una Tienda Virtual usando un Framework! <br>
Para realizar esta tienda se ha utilizado el framework Laravel.

Aquí están el botón de la tienda y el del carrito: <br><br>
<a class = "btn btn-primary" href="/tienda"> Tienda </a>
<a class = "btn btn-primary" href="/carrito"> Carrito </a>
<br><br>
<footer>
<img src="{{ URL::asset('birtLH.png') }}">
</footer>
</center>
@endsection