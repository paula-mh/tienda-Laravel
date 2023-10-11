<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class ModeloCarrito extends Model
{
    use HasFactory;
    public $table = "carrito";

    public function producto()  {
        return $this->belongsTo(ModeloProducto::class, 'id_producto');
    }

}
