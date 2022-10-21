<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['codigo', 'categoria', 'producto_oferta', 'descripcion', 'url', 'img'];
}
