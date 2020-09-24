@extends('layouts.layout')

@section('metaAdicional')
<title>TraduSquare</title>
<!--<script src="{{asset('js/lazyload.js')}}"></script>-->
@endsection

@section('contenido')
<div class="text-center">
    <img src="images/noticias.webp" class="titular w-50 mb-2" alt="Últimas noticias">
</div>
<div class="row">
    <?php $i = 0 ?>
    @forelse ($noticias as $noticia)
    <div class="col-md-4 mb-3">
        <a href="{{ route('noticia.show', $noticia->url) }}" class="overflow-y-hidden card bg-dark text-white cartaNoticia">
            <img style="height:250px" class="card-img lazy" src="{{$noticia->imagen}}" alt="Imagen destacada: {{$noticia->titulo}}" />
            <div class="card-img-overlay tituloNoticia p-0 w-90" id="div<?php echo $i ?>">
                <h5 class="card-title overlayTitulo p-2 m-0">{{$noticia->titulo}}</h5>
                <div class="overlaySombra">
                    <p class="card-text textoSombra p-2 m-0 mt-4">Autor <span>{{$noticia->updated_at}}</span></p>
                    <p class="card-text textoSombra p-2 m-0 mt-2">{{substr(strip_tags($noticia->contenido), 0, 200)}}</p>
                </div>
            </div>
        </a>
        </a>
        <?php $i++ ?>
    </div>
    @empty
    <div class="col text-center">No hay ninguna noticia aún.</div>
    @endforelse
</div>
{{ $noticias->links() }}
@endsection

@section('JSextra')
<script src="{{asset('js/funciones.js')}}"></script>
@endsection
