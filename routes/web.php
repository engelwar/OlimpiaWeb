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

Route::get('/', 'ProductController@index')->name('inicio');

Route::get('/inicio', 'ProductController@index');

Route::get('/nosotros', function () {
    return view('about');
})->name('nosotros');

Route::resource('contacto','ContactoController');

Route::get('/products/index', 'ProductController@index')->name('product');

Route::resource('products','ProductController');

Route::get('/banner/index', 'BannerController@index')->name('banner');
Route::post('/banner/guardar/orden', 'BannerController@orden')->name('banner.orden');
Route::resource('banner','BannerController');

Route::get('/libros/index', 'LibroController@index')->name('libro');

Route::resource('libros','LibroController');

Route::get('/marcas/index', 'MarcaController@index')->name('marca');

Route::resource('marcas','MarcaController');


Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
