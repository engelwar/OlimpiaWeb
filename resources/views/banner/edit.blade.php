@extends('layouts.app')

@section('content')

<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">
          {{ __('Editar Imagen') }}
        </div>
        <div class="card-body">
          <form action="{{ route ('banner.update',$banner->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <div class="mb-3">
              <label for="" class="form-label">Nombre</label>
              <input id="nombre" name="nombre" type="text" class="form-control text-uppercase" tabindex="1" value="{{ old('nombre',$banner->nombre) }}" required>
            </div>
            @if($errors->has('nombre'))
            <span class="error text-danger" for="input-nombre">{{ $errors->first('nombre') }}</span>
            @endif
            <div class="mb-3">
              <label for="" class="form-label">Seccion</label>
              <select class="form-select" aria-label="Default select example" required name="seccion">
                <option value="1" @if($banner->seccion == 1) selected @endif>Principal</option>
                <option value="2" @if($banner->seccion == 2) selected @endif>Producto</option>
                <option value="3" @if($banner->seccion == 3) selected @endif>Oferta</option>
              </select>
            </div>
            <div class="">
              <img id="imagenSeleccionada" class="w-50" src="{{asset('img/Productos/banner/'.$banner->img)}}">
            </div>
            <div class="mb-3">
              <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold mb-1">Subir Imagen</label>
              <div class='flex items-center justify-center w-full'>
                <label class='flex flex-col border-4 border-dashed w-full h-32 hover:bg-gray-100 hover:border-purple-300 group'>
                  <input name="img" id="img" class="hidden w-100" type='file' accept=".jpg, .png" tabindex="3" required>
                </label>
              </div>
            </div>
            <a href="{{ route('banner.index') }}" class="btn btn-secondary" tabindex="4">Cancelar</a>
            <button type="submit" class="btn btn-primary" tabindex="3">Guardar</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection