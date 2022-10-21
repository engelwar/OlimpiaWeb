@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    {{ __('Editar') }}
                </div>
                <div class="card-body">
                    <form action="{{ route ('libros.update',$libro->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <div class="mb-3">
                            <label for="" class="form-label">Nombre</label>
                            <input id="nombre" name="nombre" type="text" class="form-control text-uppercase" tabindex="1" value="{{ old('nombre',$libro->nombre) }}" required>
                        </div>
                        @if($errors->has('nombre'))
                            <span class="error text-danger" for="input-nombre">{{ $errors->first('nombre') }}</span>
                        @endif
                        <div class="mb-3">
                            <label for="" class="form-label">Descripción</label>
                            <input id="descripcion" name="descripcion" type="text" class="form-control" tabindex="2" value="{{ $libro->descripcion }}" required>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">URL de la tienda en línea</label>
                            <input id="url" name="url" type="text" class="form-control" tabindex="3" value="{{ $libro->url }}" required>
                        </div>
                        <div class="">
                            <img id="imagenSeleccionada" class="w-50" src="{{asset('img/Productos/Libros/'.$libro->img)}}">
                        </div>
                        <div class="mb-3">
                            <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold mb-1">Subir Imagen</label>
                            <div class='flex items-center justify-center w-full'>
                                <label class='flex flex-col border-4 border-dashed w-full h-32 hover:bg-gray-100 hover:border-purple-300 group'>
                                    <input name="img" id="img" class="hidden w-100" type='file' accept=".jpg, .png" tabindex="4" required>
                                </label>
                            </div>
                        </div>
                        <a href="{{ route('libros.index') }}" class="btn btn-secondary" tabindex="5">Cancelar</a>
                        <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
