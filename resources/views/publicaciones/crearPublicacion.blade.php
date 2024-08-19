@extends('plantilla')

@section('titulo', 'Crear publicación ')

@section('contenido')
    @if(isset($publicaciones))
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

    <form method="post" action="{{ route('publicaciones.store') }}">
        @csrf
        <div class="row g-3" >
            <div class="col-md-5">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="titulo" placeholder="titulo" name="titulo">
                    <label for="titulo">Titulo</label>
                </div>
            </div>
            <div class="col-md-7">
                <div class="form-floating">
                    <input type="text" class="form-control" id="contenido" placeholder="Contenido" name="contenido" }}">
                    <label for="contenido">Contenido</label>
                </div>
            </div>
        </div>
        <input class="btn btn-primary" type="submit" value="Guardar">
        <input class="btn btn-danger" type="reset" value="Limpiar">
    </form>
@endsection
