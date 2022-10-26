<?php

use App\Product;
use App\banner;
use App\Libro;
use App\Marca;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Products;
use Illuminate\Support\Facades\Auth;

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

Route::get('/products/index', 'ProductController@index')->name('product');

Route::resource('products','ProductController');

Route::post('/products/categoria','ProductController@colorGeneral')->name('prod_categoria');

Route::get('/banner/index', 'BannerController@index')->name('banner');
Route::post('/banner/guardar/orden', 'BannerController@orden')->name('banner.orden');
Route::resource('banner','BannerController');

Route::get('/libros/index', 'LibroController@index')->name('libro');

Route::resource('libros','LibroController');

Route::get('/marcas/index', 'MarcaController@index')->name('marca');

Route::resource('marcas','MarcaController');


Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
