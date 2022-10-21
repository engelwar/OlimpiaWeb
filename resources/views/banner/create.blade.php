@extends('layouts.app')

@section('content')

<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">
          {{ __('Agregar Imagen') }}
        </div>
        <div class="card-body">
          <form action="{{ route ('banner.store') }}" method="POST" enctype="multipart/form-data">
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
              <label for="" class="form-label">Nombre</label>
              <input id="nombre" name="nombre" type="text" class="form-control text-uppercase" tabindex="1" value="{{ old('nombre') }}" required>
              @if ($errors->has('nombre'))
              <span class="error text-danger" for="input-nombre">{{ $errors->first('nombre') }}</span>
              @endif
            </div>
            <div class="mb-3">
              <label for="" class="form-label">Nombre</label>
              <select class="form-select" aria-label="Default select example" required>
                <option selected></option>
                <option value="1">Principal</option>
                <option value="2">Producto</option>
                <option value="3">Oferta</option>
              </select>
            </div>
            <div class="">
              <img id="imagenSeleccionada" class="w-50">
            </div>
            <div class="mb-3">
              <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold mb-1">Subir Imagen</label>
              <div class='flex items-center justify-center w-full'>
                <label class='flex flex-col border-4 border-dashed w-full h-32 hover:bg-gray-100 hover:border-purple-300 group'>
                  <input name="img" id="img" type='file' class="hidden w-100" accept=".jpg, .png" tabindex="3" required>
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