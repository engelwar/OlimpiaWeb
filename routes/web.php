<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $prod = App\Product::where('producto_oferta','Productos')->get();
    $ofer = App\Product::where('producto_oferta','Ofertas')->get();
    $bann = App\Banner::orderBy('orden', 'asc')->get();
    $libr = App\Libro::all();
    $marc = App\Marca::all();
    return view('inicio', compact('prod', 'ofer', 'bann', 'libr', 'marc'));
})->name('inicio');

Route::get('/inicio', function () {
    $prod = App\Product::where('producto_oferta','Ofertas')->get();
    $ofer = App\Product::where('producto_oferta','Ofertas')->get();
    $bann = App\Banner::orderBy('orden', 'asc')->get();
    $libr = App\Libro::all();
    $marc = App\Marca::all();
    return view('inicio', compact('prod', 'ofer', 'bann', 'libr', 'marc'));
});

Route::get('/nosotros', function () {
    return view('about');
})->name('nosotros');

Route::resource('contacto','ContactoController');

// Route::get('/home', 'HomeController@index')->name('home');
