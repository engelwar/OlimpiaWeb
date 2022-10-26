<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Banner;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

use function GuzzleHttp\Promise\all;

class BannerController extends Controller
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
        // $archivos = Banner::all();
        $archivos = Banner::orderBy('orden', 'asc')->get();
        $contar = Banner::count();
        return view('banner.index', compact('archivos','contar'));
    }
    public function orden(Request $request){
        if($request->orden)
        {
            $orden = json_decode($request->orden);
            foreach ( $orden as $k => $v) {
                $banner = Banner::find($v->id);
                $banner->orden = $v->order;
                $banner->save();
            }
        }
        return redirect()->route('banner.index');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('banner.create');
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
            'nombre' => 'required|unique:banners'
        ]);
        $banner = $request->all();
        if ($img = $request->file('img')) {
            $rutaGuardarImg = 'img/Productos/Banner/';
            $imagenBanner = $img->getClientOriginalName();
            Storage::disk('publico')->putFileAs('/banner/', $img, $imagenBanner);
            $banner['img'] = $imagenBanner;
        }
        Banner::create($banner);
        return redirect()->route('banner.index');
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
        $banner = Banner::find($id);
        return view('banner.edit')->with('banner', $banner);
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
        $banner = Banner::find($id);
        $banner->nombre = $request->get('nombre');
        if ($request->file('img') != null) {
            $rutaGuardarImg = 'img/Productos/Banner/';
            $imagenBanner = $request->file('img')->getClientOriginalName();
            Storage::disk('publico')->delete('/banner/' . $banner->img);
            Storage::disk('publico')->putFileAs('/banner/', $request->file('img'), $imagenBanner);
            $banner->img = $imagenBanner;
        }
        $banner->save();
        return redirect()->route('banner.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Banner $banner)
    {
        Storage::disk('publico')->delete('/banner/' . $banner->img);
        $banner->delete();

        return redirect()->route('banner.index');
    }
}
