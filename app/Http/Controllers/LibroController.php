<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Libro;
use Illuminate\Support\Facades\Storage;


class LibroController extends Controller
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
        $archivos = Libro::all();
        return view('libros.index',compact('archivos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('libros.create');
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
            'nombre' => 'required|unique:libros'
        ]);
        $libro = $request->all();
        if ($img = $request->file('img')) {
            $rutaGuardarImg = 'img/Productos/Libros/';
            $imagenLibro = $img->getClientOriginalName();
            Storage::disk('publico')->putFileAs('/Libros/', $img, $imagenLibro);
            $libro['img'] = $imagenLibro;
        }
        Libro::create($libro);
        return redirect()->route('libros.index');
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
        $libro = Libro::find($id);
        return view('libros.edit')->with('libro', $libro);
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
        $libro = Libro::find($id);
        $libro->nombre = $request->get('nombre');
        $libro->descripcion = $request->get('descripcion');
        $libro->url = $request->get('url');
        if($request->file('img') != null){
            $rutaGuardarImg = 'img/Productos/Banner/';
            $imagenLibro = $request->file('img')->getClientOriginalName();
            Storage::disk('publico')->delete('/Libros/'.$libro->img);
            Storage::disk('publico')->putFileAs('/Libros/', $request->file('img'), $imagenLibro);
            $libro->img = $imagenLibro;
        }
        $libro->save();
        return redirect()->route('libros.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Libro $libro)
    {
        Storage::disk('publico')->delete('/Libros/'.$libro->img);
        $libro->delete();

        return redirect()->route('libros.index');
    }
}
