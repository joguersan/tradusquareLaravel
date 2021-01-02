@extends('layouts.layout')
@section('metaAdicional')
  <title>TraduSquare</title>
  <meta name="description" content="Comunidad hispana de fantraducción de videojuegos que aúna a decenas de equipos de la scene hispana para ofrecer parches de traducción de calidad en español y otros idiomas peninsulares como el catalán."/>
@endsection
@section('contenido')
    <div class="col text-center">
      <img src="images/noticiasMini.webp" alt="Últimas noticias" class="w-50 mb-2">
      <div class="row">
        @foreach($noticias as $noticia)
          <div class="col-md-4 text-center mb-2 previewEntrada">
            <div class="d-flex justify-content-center w-100 bg-image headerFicha p-4" style="background-image:url({{$noticia->imagen}})">
              <p class="text-white p-2 descripcionNoticia">{{getDescription($noticia->contenido)}}</p>
            </div>
              <div class="d-flex justify-content-center">
                <a href="{{route('noticia.show', $noticia->url)}}">
                  <div class="p-3 mr-5 ml-5 bordeAmarillo text-dark bg-light tituloEntradaIndex font-weight-bold sombra">
                    <h4>{{$noticia->titulo}}</h4>
                    <hr>
                    <div class="row">
                      <div class="col-6 text-left">
                        {{$noticia->autor}}
                      </div>
                      <div class="col-6 text-right">
                        {{getUpdatedAtAttribute($noticia->updated_at)}}
                      </div>
                    </div>
                  </div>
                  <div class="row">
                  </div>
                </a>
              </div>
          </div>
        @endforeach
        <a href="{{route('noticias.index')}}"><button class="btn btn-primary">Ver todas las noticias</button></a>
      </div>
    </div>
<div class="row">
    <div class="col-md-8">
      <img src="images/estilo/fichaTitleMini.webp" alt="Proyectos actualizados" class="w-75 mb-2">
      <div class="row">
      @foreach($fichas as $ficha)
        <div class="col-md-6 text-center mb-2 previewEntrada">
          <div class="d-flex justify-content-center w-100 bg-image headerFicha p-4" style="background-image:url({{$ficha->imagen}})"></div>
            <div class="d-flex justify-content-center">
              <a href="{{route('ficha.show', $ficha->url)}}">
                <div class="p-3 mr-5 ml-5 bordeAmarillo text-dark bg-light tituloEntradaIndex font-weight-bold sombra">
                  <h4>{{$ficha->nombre}}</h4>
                  <hr>
                  <div class="col">
                    Actualizada el {{getUpdatedAtAttribute($ficha->updated_at)}}
                  </div>
                </div>
              </a>
            </div>
        </div>
      @endforeach
    </div>
        <a href="{{route('fichas.index')}}"><button class="btn btn-primary">Ver todos los proyectos</button></a>
    </div>
    <div class="col-md-4">
        <div class="col">
          <img src="images/estilo/tablonTitleMini.webp" alt="Tablón de misiones" class="w-100 mb-5"/>
          <div class="col p-3 bordeAmarillo text-dark bg-light tituloEntradaIndex font-weight-bold sombra">
            @foreach($tablon as $entrada)
            <p>{{$entrada->titulo}}</p>
            @endforeach
            <hr>
            <a href="{{route('tablon-de-misiones.index')}}">> Ver el tablón de misiones</a>
          </div>

        </div>
        <div class="col">
          <img src="images/estilo/commentTitleMini.webp" alt="Últimos comentarios" class="w-100 mb-2">
            @foreach($comentarios as $comentario)
            <a href="{{route('noticia.show', $comentario->noticias->url . '#' . $comentario->id)}}"><div class="tarjeta bg-white rounded mb-2 p-2">{!!$comentario->mensaje!!}</div></a>
            @endforeach
            <a href="{{route('comentarios.index')}}"><button class="btn btn-primary">Ver todos los comentarios</button></a>
        </div>
      </div>
</div>
@endsection
@section('JSextra')
  <script type="module" src="/pwabuilder-sw-register.js"></script>
@endsection
