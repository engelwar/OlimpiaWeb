<?php

namespace App\Http\Controllers;

use App\Http\Requests\EditRequest;
use Illuminate\Http\Request;
use App\Product;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

use function GuzzleHttp\Promise\all;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $productos = Product::where('producto_oferta', 'Productos')->get();
        $ofertas = Product::where('producto_oferta', 'Ofertas')->get();
        return view('products.index', compact('productos', 'ofertas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'codigo' => 'required|unique:products'
        ]);
        $product = $request->all();
        if ($img = $request->file('img')) {
            $rutaGuardarImg = 'img/Productos/';
            $imagenProducto = $img->getClientOriginalName();
            Storage::disk('publico')->putFileAs('/', $img, $imagenProducto);
            $product['img'] = $imagenProducto;
        }
        Product::create($product);
        return redirect()->route('products.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        return view('products.edit')->with('product', $product);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EditRequest $request, $id)
    {
        $product = Product::find($id);
        $product->codigo = $request->get('codigo');
        $product->producto_oferta = $request->get('producto_oferta');
        $product->descripcion = $request->get('descripcion');
        $product->url = $request->get('url');
        $product->color_bloque = $request->get('color_bloque');
        $product->color_text = $request->get('color_text');
        $product->precio_anterior = $request->get('precio_anterior');
        $product->precio_actual = $request->get('precio_actual');
        if($request->file('img') != null){
            $rutaGuardarImg = 'img/Productos/';
            $imagenProducto = $request->file('img')->getClientOriginalName();
            Storage::disk('publico')->delete($product->img);
            Storage::disk('publico')->putFileAs('/', $request->file('img'), $imagenProducto);
            $product->img = $imagenProducto;
        }
        $product->save();
        return redirect()->route('products.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        Storage::disk('publico')->delete($product->img);
        $product->delete();

        return redirect()->route('products.index');
    }
}
