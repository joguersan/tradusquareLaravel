@extends('layouts.inicio')
@section('metaAdicional')
<title>TraduSquare</title>
<meta name="description" content="Comunidad hispana de fantraducción de videojuegos que aúna a decenas de equipos de la scene hispana para ofrecer parches de traducción de calidad en español y otros idiomas peninsulares como el catalán." />
@endsection
@section('contenido')
<div class="col p-4 text-center rounded border mx-lg-5 mt-lg-5 bg-white">
    <img loading="lazy" src="images/noticiasMini.webp" alt="Últimas noticias" class="mb-2">
    <div class="row">
        @foreach($noticias as $noticia)
        <div class="col-md-4 flex text-center mb-2 previewEntrada">
            <div class="d-flex justify-content-center w-100 bg-image headerFicha p-4" style="background-image:url({{$noticia->imagen}})">
                <p class="text-white p-2 descripcionNoticia">{{getDescription($noticia->contenido)}}</p>
            </div>
            <div class="col justify-content-center">
                <a href="{{route('noticia.show', $noticia->url)}}">
                    <div class="p-3 mr-lg-4 ml-lg-4 bordeAmarillo text-dark bg-light tituloEntradaIndex font-weight-bold sombra">
                        <h4>{{$noticia->titulo}}</h4>
                        <hr>
                        <div class="row">
                            <div class="col">
                                {{$noticia->autor->nombre}}
                            </div>
                            <div class="col">
                                {{$noticia->updated_at->diffForHumans()}}
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        @endforeach
    </div>
    <a href="{{route('noticias.index')}}"><button class="btn btn-primary">Ver todas las noticias</button></a>
</div>
</div>
<div class="row mx-lg-5 mb-2 m-0">
    <div class="col-md-8 text-center rounded border bg-white">
        <img loading="lazy" src="images/estilo/fichaTitleMini.webp" alt="Proyectos actualizados" class="w-md-75 mb-2">
        <div class="d-flex justify-content-center align-content-center flex-wrap table-responsive w-100">
            <table class="table text-left table-hover">
                @foreach($fichas as $ficha)
                @foreach($ficha->plataformas as $plataforma)
                    <tr>
                        @if($loop->first)
                            <td rowspan="{{count($ficha->plataformas)}}" class="align-middle p-3">
                                <a href="{{route('ficha.show', $ficha->url)}}">
                                    {{$ficha->nombre}}
                                </a>
                            </td>
                            @endif
                            <td class="p-2">
                                <img loading="lazy" src="{{$plataforma->imagen}}" style="width:20px; height:20px" title="{{$plataforma->nombre}}" /> {{$plataforma->nombre}}
                            </td>
                            <td class="p-2 text-center">
                                <span class="badge {{getStatusBadge($plataforma->pivot->estado)}} p-1">{{$plataforma->pivot->estado}}</span>
                            </td>
                            @if($loop->first)
                                <td rowspan="{{count($ficha->plataformas)}}" class="p-3 text-center align-middle">
                                    Actualizada {{$ficha->updated_at->diffForHumans()}}
                                </td>
                                @endif
                    </tr>
                    @endforeach
                    @endforeach
            </table>
        </div>
        <a href="{{route('fichas.index')}}"><button class="btn btn-primary">Ver todos los proyectos</button></a>
    </div>
    <div class="col-md-4 pe-0">
        <div class="col rounded border mb-3 bg-white p-3">
            <img loading="lazy" src="images/estilo/tablonTitleMini.webp" alt="Tablón de misiones" class="w-md-100 mb-5" />
            <div class="d-flex justify-content-center ">
                <div class="p-3 text-dark bg-light tituloEntradaIndex font-weight-bold sombra mt-0">
                    @forelse($tablon as $entrada)
                    <p>{{$entrada->titulo}}</p>
                    @empty
                    <div class="col text-center">¡Por ahora no necesitamos ayuda!</div>
                    @endforelse
                    <hr>
                    <a href="{{route('tablon-de-misiones.index')}}">> Ver el tablón de misiones</a>
                </div>
            </div>
        </div>
        <div class="col rounded border bg-white p-3 ">
            <img loading="lazy" src="images/estilo/commentTitleMini.webp" alt="Últimos comentarios" class="w-md-100 mb-2">
            @foreach($comentarios as $comentario)
            <div class="tarjeta border bg-white rounded mb-3 p-1">
                <div class="row font-weight-bold">
                    <div class="col">
                        <img loading="lazy" class="rounded-circle imgcirculo" src="https://tradusquare.es/{{$comentario -> users -> imagen}}" title="Avatar de {{$comentario -> users -> nombre}}" alt="Avatar de {{$comentario -> users -> nombre}}" />
                    </div>
                    <div class="col">
                        {{$comentario -> users -> nombre}}
                    </div>
                    <div class="col">
                        {{getUpdatedAtAttribute($comentario->created_at)}}
                    </div>
                </div>
                <hr>
                <div class="col pb-2">
                    <a href="{{route('noticia.show', $comentario->noticias->url . '#' . $comentario->id)}}">
                        {{$comentario -> noticias -> titulo}}
                    </a>
                </div>
            </div>
            @endforeach
            <a href="{{route('comentarios.index')}}"><button class="btn btn-primary">Ver todos los comentarios</button></a>
        </div>
    </div>
    @endsection
    @section('JSextra')
    <script type="module" src="/pwabuilder-sw-register.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/masonry-layout@4.2.2/dist/masonry.pkgd.min.js" integrity="sha384-GNFwBvfVxBkLMJpYMOABq3c+d3KnQxudP/mGPkzpZSTYykLBNsZEnG2D9G/X/+7D" crossorigin="anonymous" async></script>
    @endsection