<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    protected $fillable = ['nombre', 'descripcion', 'url', 'img'];
}
