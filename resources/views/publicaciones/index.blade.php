@extends('plantilla')
@section('contenido')
    <h1>Publicaciones</h1> <a class="btn btn-primary flex-end" href=" {{ route('publicaciones.create') }}">Nuevo</a>

    @foreach( $publicaciones as $publicacion)
    <div class="card">
        <div class="card-header">
            {{$publicacion->categoria}}
        </div>
        <div class="card-body">
            <h5 class="card-title">{{$publicacion->titulo}}</h5>
            <p class="card-text">{{$publicacion->contenido}}.</p>
            <a href="#" class="btn btn-primary">Comentar</a>
        </div>
    </div>
    @endforeach
@endsection
