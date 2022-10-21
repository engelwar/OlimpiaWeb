@extends('layouts.app')

@section('content')

<nav class="navbar navbar-expand-lg mt-1">
    <div class="container justify-content-center flex-column" id="navbarSupportedContent">
        @if ($archivos->count() < 3)
        <div class="mt-3 myBtn">
            <a href="{{ route('libros.create')}}" class="btn btn-primary">Agregar Archivo</a>
        </div>
        @else
        <h3>Ya existen 3 archivos</h3>
        <p>Elimine 1 si desea agregar otro</p>
        @endif

    </div>
</nav>

<div class="container_tablas m-auto w-100">
    <div class="tabla1 w-100 pl-md-3 pr-md-3">
        <div class="mt-3 mr-1">
            <div class="card-header text-center">
                <h2>Sección Libros y Productos</h2>
            </div>
            <table id="data_tabla1" class="table table-striped w-100">
                <thead class="bg-primary text-white">
                    <tr>
                        <th scope="col">Nombre</th>
                        <th scope="col">Descripción</th>
                        <th scope="col">Imagen</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($archivos as $libro)
                    <tr>
                        <td>{{ $libro->nombre }}</td>
                        <td>{{ $libro->descripcion }}</td>
                        <td class="">
                            <img src="{{asset('img/Productos/Libros/'.$libro->img)}}" width="100px">
                        </td>
                        <td>
                            <div class="d-flex justify-content-center flex-row">
                                <a href="{{ route('libros.edit',$libro->id) }}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                <form action="{{ route ('libros.destroy',$libro->id) }}" method="POST" class="formEliminar">
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
                        <th scope="col">Nombre</th>
                        <th scope="col">Descripción</th>
                        <th scope="col">Imagen</th>
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
