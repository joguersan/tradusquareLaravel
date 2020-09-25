@extends('layouts.layout')
@section('metaAdicional')
  <title>TraduSquare</title>
  <meta name="description" content="Comunidad hispana de fantraducción de videojuegos que aúna a decenas de equipos de la scene hispana para ofrecer parches de traducción de calidad en español y otros idiomas peninsulares como el catalán."/>
@endsection
@section('contenido')
<div class="row bg-light rounded">
    <div class="col-md-6">
      <img src="images/noticiasMini.webp" alt="Últimas noticias" class="w-75 mb-2">
        @foreach($noticias as $noticia)
        <a href="{{route('noticia.show', $noticia->url)}}"><div class="tarjeta bg-white rounded mb-2 p-2">{{$noticia->titulo}}</div></a>
        @endforeach
        <a href="{{route('noticias.index')}}"><button class="btn btn-primary">Ver todas las noticias</button></a>
    </div>
    <div class="col-md-6">
      <img src="images/estilo/fichaTitleMini.webp" alt="Proyectos actualizados" class="w-75 mb-2">
        @foreach($fichas as $ficha)
        <a href="{{route('fichas.show', $ficha->url)}}"><div class="tarjeta bg-white rounded mb-2 p-2">{{$ficha->nombre}}</div></a></p>
        @endforeach
        <a href="{{route('fichas.index')}}"><button class="btn btn-primary">Ver todos los proyectos</button></a>
    </div>
</div>
<div class="row bg-light rounded">
    <div class="col-md-6">
      <img src="images/estilo/commentTitleMini.webp" alt="Últimos comentarios" class="w-75 mb-2">
        @foreach($comentarios as $comentario)
        <a href="{{route('comentarios.show', $comentario->id)}}"><div class="tarjeta bg-white rounded mb-2 p-2">{!!$comentario->mensaje!!}</div></a>
        @endforeach
        <a href="{{route('comentarios.index')}}"><button class="btn btn-primary">Ver todos los comentarios</button></a>
    </div>
    <div class="col-md-6">
      <img src="images/estilo/tablonTitleMini.webp" alt="Tablón de misiones" class="w-75 mb-2">
        @foreach($tablon as $entrada)
        <div class="tarjeta bg-white rounded mb-2 p-2">{{$entrada->titulo}}</div>
        @endforeach
        <a href="{{route('tablon-de-misiones.index')}}"><button class="btn btn-primary">Ver el tablón de misiones</button></a>
    </div>
</div>
@endsection
@section('JSextra')
  <script type="module" src="/pwabuilder-sw-register.js"></script>
@endsection
