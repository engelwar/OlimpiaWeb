<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['codigo', 'producto_oferta', 'descripcion', 'url', 'img', 'color_bloque', 'color_text', 'precio_anterior', 'precio_actual'];
}
