@extends('plantilla')

@section('titulo', 'Crear publicación ')

@section('contenido')
    @if(isset($producto))
        <h1>Editar publicacion</h1>
    @else
        <h1>Crear publicación</h1>
    @endif

    <!--
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    -->

    <form method="post"
          @if(isset($publicaciones))
              action="{{ route('publicaciones.update',['id'=>$publicaciones->id]) }}"
          @else
              action="{{ route('publicaciones.store') }}"
        @endif >

        @csrf
        @isset($producto)
            @method('put')
        @endisset
        <div class="row g-3" >
            <div class="col-md-5">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="codigo" placeholder="Código" name="codigo" value="{{ isset($producto) ? $producto->codigo : old('codigo') }}">
                    <label for="codigo">Titulo</label>
                </div>
            </div>
            <div class="col-md-7">
                <div class="form-floating">
                    <input type="text" class="form-control" id="nombre" placeholder="Nombre" name="nombre" value="{{ isset($producto) ? $producto->nombre : old('nombre') }}">
                    <label for="nombre">Contenido</label>
                </div>
            </div>
        </div>

        </div>
        <input class="btn btn-primary" type="submit" value="Guardar">
        <input class="btn btn-danger" type="reset" value="Limpiar">
    </form>
@endsection
