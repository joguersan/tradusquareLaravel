@extends('layouts.layout')
@section('contenido')
<div class="row">
    <div class="col-md-6">
      <img src="images/noticias.webp" alt="Últimas noticias" class="w-75">
        @foreach($noticias as $noticia)
        <p><a href="{{route('noticia.show', $noticia->url)}}">{{$noticia->titulo}}</a></p>
        @endforeach
        <a href="{{route('noticias.index')}}">Ver todas las noticias</a>
    </div>
    <div class="col-md-6">
      <img src="images/estilo/fichaTitle.jpg" alt="Últimas noticias" class="w-75">
        @foreach($fichas as $ficha)
        <p><a href="{{route('fichas.show', $ficha->url)}}">{{$ficha->nombre}}</a></p>
        @endforeach
        <a href="{{route('fichas.index')}}">Ver todos los proyectos</a>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
      <img src="images/estilo/commentTitle.jpg" alt="Últimas noticias" class="w-75">
        @foreach($comentarios as $comentario)
        <p><a href="{{route('comentarios.show', $comentario->id)}}">{!!$comentario->mensaje!!}</a></p>
        @endforeach
        <a href="{{route('comentarios.index')}}">Ver todos los comentarios</a>
    </div>
    <div class="col-md-6">
      <img src="images/estilo/tablonTitle.jpg" alt="Últimas noticias" class="w-75">
        @foreach($tablon as $entrada)
        <p>{{$entrada->titulo}}</p>
        @endforeach
        <a href="{{route('comentarios.index')}}">Ver el tablón de misiones</a>
    </div>
</div>
@endsection
