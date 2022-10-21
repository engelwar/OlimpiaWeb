@extends('layouts.app')

@section('content')

<div class="d-flex w-100 justify-content-center flex-md-nowrap flex-wrap">
    <div class="w-75 pl-md-3 pr-md-3 mb-4">
        <div class="">
            <div class="">
                <div class="card">
                    <div class="card-header">
                        {{ __('Agregar') }}
                    </div>
                    <div class="card-body">
                        <form action="{{ route ('marcas.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <!-- @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif -->
                            <div class="mb-3">
                                <label for="" class="form-label">Nombre de la empresa</label>
                                <input id="nombre" name="nombre" type="text" class="form-control text-uppercase" tabindex="1" value="{{ old('nombre') }}">
                                @if ($errors->has('nombre'))
                                <span class="error text-danger" for="input-nombre">{{ $errors->first('nombre') }}</span>
                                @endif
                            </div>
                            <div class="">
                                <img id="imagenSeleccionada" class="w-50">
                            </div>
                            <div class="mb-3">
                                <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold mb-1">Subir Imagen</label>
                                <div class='flex items-center justify-center w-full'>
                                    <label class='flex flex-col border-4 border-dashed w-full h-32 hover:bg-gray-100 hover:border-purple-300 group'>
                                        <input name="img" id="img" type='file' class="hidden w-100" accept=".png" tabindex="2" required>
                                    </label>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary" tabindex="3">Guardar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container_tablas w-100 pl-md-3 pr-md-3">
        <div class="tabla1 w-100">
            <div class="">
                <div class="card-header text-center">
                    <h2>Sección Marcas</h2>
                </div>
                <table id="data_tabla1" class="table table-striped w-100">
                    <thead class="bg-primary text-white">
                        <tr>
                            <th scope="col">Nombre de Empresa</th>
                            <th scope="col">Imagen</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($archivos as $marca)
                        <tr>
                            <td>{{ $marca->nombre }}</td>
                            <td class="">
                                <img src="{{asset('img/Productos/Marcas/'.$marca->img)}}" width="100px">
                            </td>
                            <td>
                                <div class="d-flex justify-content-center flex-row">
                                    <a href="{{ route('marcas.edit',$marca->id) }}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                    <form action="{{ route ('marcas.destroy',$marca->id) }}" method="POST" class="formEliminar">
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
                            <th scope="col">Nombre de Empresa</th>
                            <th scope="col">Imagen</th>
                            <th scope="col"></th>
                        </tr>
                    </tfoot>
                </table>
            </div>
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
