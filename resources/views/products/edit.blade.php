@extends('layouts.app')

@section('content')

<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">
          {{ __('Editar Producto') }}
        </div>
        <div class="card-body">
          <form action="{{ route ('products.update',$product->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <div class="mb-3">
              <label for="" class="form-label">Código</label>
              <input id="codigo" name="codigo" type="text" class="form-control text-uppercase" tabindex="1" value="{{ old('codigo',$product->codigo) }}" required>
            </div>
            @if($errors->has('codigo'))
            <span class="error text-danger" for="input-codigo">{{ $errors->first('codigo') }}</span>
            @endif
            <div class="mb-3">
              <label for="" class="col-form-label">Productos/Ofertas</label>
              <select id="producto_oferta" class="form-select form-control" aria-label="Default select example" name="producto_oferta" required tabindex="3">
                <option selected></option>
                <option value="Productos" @if($product->producto_oferta == 'Productos') selected @endif>Productos</option>
                <option value="Ofertas" @if($product->producto_oferta == 'Ofertas') selected @endif>Ofertas</option>
              </select>
            </div>
            <div class="mb-3">
              <label for="" class="form-label">Descripción</label>
              <input id="descripcion" name="descripcion" type="text" class="form-control" tabindex="4" value="{{ $product->descripcion }}" required>
            </div>
            <div class="mb-3">
              <label for="" class="form-label">URL de la tienda en línea</label>
              <input id="url" name="url" type="text" class="form-control" tabindex="4" value="{{ $product->url }}" required>
            </div>
            <div class="">
              <img id="imagenSeleccionada" class="w-50" src="{{asset('img/Productos/'.$product->img)}}">
            </div>
            <div class="mb-3">
              <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold mb-1">Subir Imagen</label>
              <div class='flex items-center justify-center w-full'>
                <label class='flex flex-col border-4 border-dashed w-full h-32 hover:bg-gray-100 hover:border-purple-300 group'>
                  <input name="img" id="img" class="hidden w-100" type='file' accept=".jpg, .png" tabindex="6" value="{{ $product->img }}">
                </label>
              </div>
            </div>
            <div class="d-flex justify-content-between">
              <div class="mb-3">
                <label for="" class="form-label">Color de Bloque</label>
                <input type="color" class="form-control form-control-color" id="exampleColorInput" value="{{ $product->color_bloque }}" title="Choose your color" name="color_bloque" required>
              </div>
              <div class="mb-3">
                <label for="" class="form-label">Color de Texto</label>
                <input type="color" class="form-control form-control-color" id="exampleColorInput" value="{{ $product->color_text }}" title="Choose your color" name="color_text" required>
              </div>
              <div class="mb-3">
                <label for="" class="form-label">Precio Anterior</label>
                <input type="number" class="form-control" id="exampleColorInput" value="{{$product->precio_anterior}}" name="precio_anterior">
              </div>
              <div class="mb-3">
                <label for="" class="form-label">Precio Actual</label>
                <input type="number" class="form-control" id="exampleColorInput" value="{{$product->precio_actual}}" name="precio_actual" required>
              </div>
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