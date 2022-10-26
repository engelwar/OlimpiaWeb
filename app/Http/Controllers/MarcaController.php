<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Marca;
use Illuminate\Support\Facades\Storage;

class MarcaController extends Controller
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
        $archivos = Marca::all();
        return view('marcas.index',compact('archivos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'nombre' => 'required|unique:marcas'
        ]);
        $marca = $request->all();
        if ($img = $request->file('img')) {
            $rutaGuardarImg = 'img/Productos/Marcas/';
            $imagenMarca = $img->getClientOriginalName();
            Storage::disk('publico')->putFileAs('/Marcas/', $img, $imagenMarca);
            $marca['img'] = $imagenMarca;
        }
        Marca::create($marca);
        return redirect()->route('marcas.index');
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
        $marca = Marca::find($id);
        return view('marcas.edit')->with('marca', $marca);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $marca = Marca::find($id);
        $marca->nombre = $request->get('nombre');
        if($request->file('img') != null){
            $rutaGuardarImg = 'img/Productos/Marcas/';
            $imagenMarca = $request->file('img')->getClientOriginalName();
            Storage::disk('publico')->delete('/Marcas/'.$marca->img);
            Storage::disk('publico')->putFileAs('/Marcas/', $request->file('img'), $imagenMarca);
            $marca->img = $imagenMarca;
        }
        $marca->save();
        return redirect()->route('marcas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Marca $marca)
    {
        Storage::disk('publico')->delete('/Marcas/'.$marca->img);
        $marca->delete();

        return redirect()->route('marcas.index');
    }
}
