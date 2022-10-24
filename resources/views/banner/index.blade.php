@extends('layouts.app')

@section('content')

<nav class="navbar navbar-expand-lg mt-1">
    <div class="container justify-content-center flex-column" id="navbarSupportedContent">
        <div class="mt-3 myBtn">
            <a href="{{ route('banner.create')}}" class="btn btn-primary">Agregar Imagen</a>
        </div>
        <form action="{{ route('banner.orden')}}" method="POST">
            @csrf
            <button class="btn btn-primary mt-2" type="submit" id="saveorder" name="orden" value="">Guardar Orden</button>
        </form>
    </div>
</nav>

<div class="container_tablas m-auto w-100">
    <div class="tabla1 w-100 pl-md-3 pr-md-3">
        <div class="mt-3 mr-1">
            <div class="card-header text-center">
                <h2>Imagenes de Banner</h2>
            </div>
            <table id="data_tabla1" class="table table-striped w-100">
                <thead class="bg-primary text-white">
                    <tr>
                        <th scope="col">Orden</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Imagen</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($archivos as $banner)
                    @if ($banner->seccion == 1)
                    <tr>
                        <td class="order">
                            <form action="{{ route ('banner.update',$banner->id) }}" method="POST" enctype="multipart/form-data">
                                <select id="{{$banner->id}}" class="form-select seleccionar_orden" aria-label="Default select example">
                                    <option value="{{null}}">N/a</option>
                                    @for( $i = 1; $i <= $contar; $i++)
                                    <option value="{{ $i }}" @if($banner->orden==$i) selected @endif>{{ $i }}</option>
                                    @endfor
                                </select>
                            </form>
                        </td>
                        <td>{{ $banner->nombre }}</td>
                        <td class="">
                            <img src="img/Productos/banner/{{$banner->img}}" width="100px">
                        </td>
                        <td>
                            <div class="d-flex justify-content-center flex-row">
                                <a href="{{ route('banner.edit',$banner->id) }}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                <form action="{{ route ('banner.destroy',$banner->id) }}" method="POST" class="formEliminar">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endif
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
<nav class="navbar navbar-expand-lg mt-1">
    <div class="container justify-content-center flex-column" id="navbarSupportedContent">
        <div class="mt-3 myBtn">
            <a href="{{ route('banner.create')}}" class="btn btn-primary">Agregar Imagen</a>
        </div>
    </div>
</nav>

<div class="container_tablas m-auto w-100">
    <div class="tabla1 w-100 pl-md-3 pr-md-3">
        <div class="mt-3 mr-1">
            <div class="card-header text-center">
                <h2>Banner Productos</h2>
            </div>
            <table id="data_tabla1" class="table table-striped w-100">
                <thead class="bg-primary text-white">
                    <tr>
                        <th scope="col">Orden</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Imagen</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($archivos as $banner)
                    @if ($banner->seccion == 2)
                    <tr>
                        <td class="order">
                            <form action="{{ route ('banner.update',$banner->id) }}" method="POST" enctype="multipart/form-data">
                                <select id="{{$banner->id}}" class="form-select seleccionar_orden" aria-label="Default select example">
                                    <option value="{{null}}">N/a</option>
                                    @for( $i = 1; $i <= $contar; $i++)
                                    <option value="{{ $i }}" @if($banner->orden==$i) selected @endif>{{ $i }}</option>
                                    @endfor
                                </select>
                            </form>
                        </td>
                        <td>{{ $banner->nombre }}</td>
                        <td class="">
                            <img src="img/Productos/banner/{{$banner->img}}" width="100px">
                        </td>
                        <td>
                            <div class="d-flex justify-content-center flex-row">
                                <a href="{{ route('banner.edit',$banner->id) }}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                <form action="{{ route ('banner.destroy',$banner->id) }}" method="POST" class="formEliminar">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endif
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
<nav class="navbar navbar-expand-lg mt-1">
    <div class="container justify-content-center flex-column" id="navbarSupportedContent">
        <div class="mt-3 myBtn">
            <a href="{{ route('banner.create')}}" class="btn btn-primary">Agregar Imagen</a>
        </div>
    </div>
</nav>

<div class="container_tablas m-auto w-100">
    <div class="tabla1 w-100 pl-md-3 pr-md-3">
        <div class="mt-3 mr-1">
            <div class="card-header text-center">
                <h2>Banner Ofertas</h2>
            </div>
            <table id="data_tabla1" class="table table-striped w-100">
                <thead class="bg-primary text-white">
                    <tr>
                        <th scope="col">Orden</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Imagen</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($archivos as $banner)
                    @if ($banner->seccion == 3)
                    <tr>
                        <td class="order">
                            <form action="{{ route ('banner.update',$banner->id) }}" method="POST" enctype="multipart/form-data">
                                <select id="{{$banner->id}}" class="form-select seleccionar_orden" aria-label="Default select example">
                                    <option value="{{null}}">N/a</option>
                                    @for( $i = 1; $i <= $contar; $i++)
                                    <option value="{{ $i }}" @if($banner->orden==$i) selected @endif>{{ $i }}</option>
                                    @endfor
                                </select>
                            </form>
                        </td>
                        <td>{{ $banner->nombre }}</td>
                        <td class="">
                            <img src="img/Productos/banner/{{$banner->img}}" width="100px">
                        </td>
                        <td>
                            <div class="d-flex justify-content-center flex-row">
                                <a href="{{ route('banner.edit',$banner->id) }}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                <form action="{{ route ('banner.destroy',$banner->id) }}" method="POST" class="formEliminar">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endif
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
<nav class="navbar navbar-expand-lg mt-1">
    <div class="container justify-content-center flex-column" id="navbarSupportedContent">
        <div class="mt-3 myBtn">
            <a href="{{ route('banner.create')}}" class="btn btn-primary">Agregar Imagen</a>
        </div>
    </div>
</nav>

<div class="container_tablas m-auto w-100">
    <div class="tabla1 w-100 pl-md-3 pr-md-3">
        <div class="mt-3 mr-1">
            <div class="card-header text-center">
                <h2>Logo Productos</h2>
            </div>
            <table id="data_tabla1" class="table table-striped w-100">
                <thead class="bg-primary text-white">
                    <tr>
                        <th scope="col">Orden</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Imagen</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($archivos as $banner)
                    @if ($banner->seccion == 4)
                    <tr>
                        <td class="order">
                            <form action="{{ route ('banner.update',$banner->id) }}" method="POST" enctype="multipart/form-data">
                                <select id="{{$banner->id}}" class="form-select seleccionar_orden" aria-label="Default select example">
                                    <option value="{{null}}">N/a</option>
                                    @for( $i = 1; $i <= $contar; $i++)
                                    <option value="{{ $i }}" @if($banner->orden==$i) selected @endif>{{ $i }}</option>
                                    @endfor
                                </select>
                            </form>
                        </td>
                        <td>{{ $banner->nombre }}</td>
                        <td class="">
                            <img src="img/Productos/banner/{{$banner->img}}" width="100px">
                        </td>
                        <td>
                            <div class="d-flex justify-content-center flex-row">
                                <a href="{{ route('banner.edit',$banner->id) }}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                <form action="{{ route ('banner.destroy',$banner->id) }}" method="POST" class="formEliminar">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endif
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
<nav class="navbar navbar-expand-lg mt-1">
    <div class="container justify-content-center flex-column" id="navbarSupportedContent">
        <div class="mt-3 myBtn">
            <a href="{{ route('banner.create')}}" class="btn btn-primary">Agregar Imagen</a>
        </div>
    </div>
</nav>

<div class="container_tablas m-auto w-100">
    <div class="tabla1 w-100 pl-md-3 pr-md-3">
        <div class="mt-3 mr-1">
            <div class="card-header text-center">
                <h2>Logo Ofertas</h2>
            </div>
            <table id="data_tabla1" class="table table-striped w-100">
                <thead class="bg-primary text-white">
                    <tr>
                        <th scope="col">Orden</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Imagen</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($archivos as $banner)
                    @if ($banner->seccion == 5)
                    <tr>
                        <td class="order">
                            <form action="{{ route ('banner.update',$banner->id) }}" method="POST" enctype="multipart/form-data">
                                <select id="{{$banner->id}}" class="form-select seleccionar_orden" aria-label="Default select example">
                                    <option value="{{null}}">N/a</option>
                                    @for( $i = 1; $i <= $contar; $i++)
                                    <option value="{{ $i }}" @if($banner->orden==$i) selected @endif>{{ $i }}</option>
                                    @endfor
                                </select>
                            </form>
                        </td>
                        <td>{{ $banner->nombre }}</td>
                        <td class="">
                            <img src="img/Productos/banner/{{$banner->img}}" width="100px">
                        </td>
                        <td>
                            <div class="d-flex justify-content-center flex-row">
                                <a href="{{ route('banner.edit',$banner->id) }}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                <form action="{{ route ('banner.destroy',$banner->id) }}" method="POST" class="formEliminar">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endif
                    @endforeach
                </tbody>
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
</div>
@endsection
