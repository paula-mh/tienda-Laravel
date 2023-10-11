<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\ModeloProducto;
use App\Models\ModeloCarrito;

class Controlador extends Controller
{

    public function verTienda(){
        $tablaProductos = DB::table('producto')->get();
        return view('tienda', compact('tablaProductos'));
    }

    public function verInicio(){
        return view('inicio');
    }

    public function verCarrito(){
        $tablaCarrito = ModeloCarrito::with('producto')->get();
        return view('carrito', compact('tablaCarrito'));

        /*$tablaCarrito = DB::table('carrito')->get();
        return view('carrito', compact('tablaCarrito'));*/
    }

    public function guardarProductos(Request $request){
        $producto = new ModeloProducto;
        $total = ModeloProducto::all()->count();
        $id = ($total+1);
        $producto->id = $id++;
        $producto->nombre_producto = $request->input("nombre_producto");
        $producto->descripcion = $request->input("descripcion");
        $producto->precio = $request->input("precio");
        $producto->save();

        $tablaProductos = DB::table('producto')->get();
        return view('tienda', compact('tablaProductos'));
    }


    public function guardarCarrito(Request $request){
        $carrito = new ModeloCarrito;
        $carrito->id_producto = $request->input('id');;
        $carrito->qty = 1;
        $carrito->save();

        $tablaCarrito = ModeloCarrito::with('producto')->get();
        return view('carrito', compact('tablaCarrito'));
    }


    public function actualizarCarrito(Request $request){
        $id_producto = $request->input('id_producto');
        $qty = $request->input('qty');

        if($qty <= 0){
            DB::table('carrito')->where('id_producto', $id_producto)-> delete();
        }

        DB::table('carrito')->where('id_producto', $id_producto)-> update(['qty'=>$qty]);
        $tablaCarrito = ModeloCarrito::all();
        return view('carrito', compact('tablaCarrito'));
    }

}
