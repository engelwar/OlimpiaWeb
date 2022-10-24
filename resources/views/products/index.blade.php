@extends('layouts.app')

@section('content')

<nav class="navbar navbar-expand-lg mt-1">
    <div class="container justify-content-center flex-column" id="navbarSupportedContent">
        <div class="mt-3 myBtn">
            <a href="{{ route('products.create')}}" class="btn btn-primary">Agregar Producto o Oferta</a>
        </div>
    </div>
</nav>



<div class="container_tablas d-flex w-100 m-auto flex-md-nowrap flex-wrap">
    <div class="tabla1 w-100 ml-3 mr-1 mb-4">
        <div class="">
            <div class="card-header text-center">
                <h2>Productos</h2>
            </div>
            <table id="data_tabla1" class="table table-striped w-100">
                <thead class="bg-primary text-white">
                    <tr>
                        <th scope="col">Código</th>
                        <th scope="col">Descripción</th>
                        <th scope="col">Archivo</th>
                        <th scope="col">Color</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($productos as $product)
                    <tr>
                        <td>{{ $product->codigo }}</td>
                        <td>{{ $product->descripcion }}</td>
                        <td class="">
                            <img src="{{asset('img/Productos/'.$product->img)}}" width="100px">
                        </td>
                        <td><input type="color" class="form-control form-control-color" id="exampleColorInput" value="{{ $product->color_bloque }}" title="Choose your color" name="color_bloque"></td>
                        <td>
                            <div class="d-flex justify-content-center flex-row">
                                <a href="{{ route('products.edit',$product->id) }}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                <form action="{{ route ('products.destroy',$product->id) }}" method="POST" class="formEliminar">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                <tfoot class="bg-primary text-white">
                    <tr>
                        <th scope="col">Código</th>
                        <th scope="col">Descripción</th>
                        <th scope="col">Archivo</th>
                        <th scope="col">Color</th>
                        <th scope="col"></th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
    <div class="tabla2 w-100 ml-2 mr-3">
        <div class="">
            <div class="card-header text-center">
                <h2>Ofertas</h2>
            </div>
            <table id="data_tabla2" class="table table-striped">
                <thead class="bg-primary text-white">
                    <tr>
                        <th scope="col">Código</th>
                        <th scope="col">Descripción</th>
                        <th scope="col">Archivo</th>
                        <th scope="col">Color</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($ofertas as $product)
                    <tr>
                        <td>{{ $product->codigo }}</td>
                        <td>{{ $product->descripcion }}</td>
                        <td class="">
                            <img src="{{asset('img/Productos/'.$product->img)}}" width="100px">
                        </td>
                        <td><input type="color" class="form-control form-control-color" id="exampleColorInput" value="{{ $product->color_bloque }}" title="Choose your color" name="color_bloque"></td>
                        <td>
                            <div class="d-flex justify-content-center flex-row">
                                <a href="{{ route('products.edit',$product->id) }}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                <form action="{{ route ('products.destroy',$product->id) }}" method="POST" class="formEliminar">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger rounded"><i class="fas fa-trash-alt"></i></button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                <tfoot class="bg-primary text-white">
                    <tr>
                        <th scope="col">Código</th>
                        <th scope="col">Descripción</th>
                        <th scope="col">Archivo</th>
                        <th scope="col">Color</th>
                        <th scope="col"></th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>
<div class="card-body">
    @if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
    @endif

    {{ __('') }}
</div>

@endsection
