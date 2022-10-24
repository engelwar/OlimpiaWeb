@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    {{ __('Crear Registro') }}
                </div>
                <div class="card-body">
                    <form action="{{ route ('products.store') }}" method="POST" enctype="multipart/form-data">
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
                            <label for="" class="form-label">Código</label>
                            <input id="codigo" name="codigo" type="text" class="form-control text-uppercase" tabindex="1" value="{{ old('codigo') }}" required>
                            @if ($errors->has('codigo'))
                            <span class="error text-danger" for="input-codigo">{{ $errors->first('codigo') }}</span>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label for="" class="col-form-label">Productos/Ofertas</label>
                            <select id="producto_oferta" class="form-select form-control" aria-label="Default select example" name="producto_oferta" required tabindex="3">
                                <option selected></option>
                                <option value="Productos">Productos</option>
                                <option value="Ofertas">Ofertas</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Descripción</label>
                            <input id="descripcion" name="descripcion" type="text" class="form-control" tabindex="4" value="{{ old('descripcion') }}" required>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">URL de la Tienda Online</label>
                            <input id="url" name="url" type="text" class="form-control" tabindex="4" value="{{ old('url') }}" required>
                        </div>
                        <div class="">
                            <img id="imagenSeleccionada" class="w-50">
                        </div>
                        <div class="mb-3">
                            <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold mb-1">Subir Imagen</label>
                            <div class='flex items-center justify-center w-full'>
                                <label class='flex flex-col border-4 border-dashed w-full h-32 hover:bg-gray-100 hover:border-purple-300 group'>
                                    <input name="img" id="img" type='file' class="hidden w-100" accept=".jpg, .png" tabindex="6" required>
                                </label>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Color de Bloque</label>
                            <input type="color" class="form-control form-control-color" id="exampleColorInput" value="" title="Choose your color" name="color_bloque">
                        </div>
                        <a href="{{ route('products.index') }}" class="btn btn-secondary" tabindex="7">Cancelar</a>
                        <button type="submit" class="btn btn-primary" tabindex="6">Guardar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
