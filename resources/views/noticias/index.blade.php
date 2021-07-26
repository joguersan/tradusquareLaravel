@extends('layouts.layout')

@section('metaAdicional')
<title>TraduSquare</title>
<!--<script src="{{asset('js/lazyload.js')}}"></script>-->
@endsection

@section('contenido')
<div class="col text-center">
    <img loading="lazy" src="images/noticiasMini.webp" alt="Últimas noticias" class="w-50 mb-2">
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
</div>
{{ $noticias->links() }}
@endsection

@section('JSextra')
<script src="{{asset('js/funciones.js')}}"></script>
@endsection