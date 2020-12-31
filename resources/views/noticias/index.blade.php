@extends('layouts.layout')

@section('metaAdicional')
<title>TraduSquare</title>
<!--<script src="{{asset('js/lazyload.js')}}"></script>-->
@endsection

@section('contenido')
  <div class="col text-center">
    <img src="images/noticiasMini.webp" alt="Últimas noticias" class="w-50 mb-2">
    <div class="row">
      @foreach($noticias as $noticia)
        <div class="col-md-4 text-center mb-5">
          <div class="w-100" style="height:250px; background-size:cover; background-position:center; background-image:url({{$noticia->imagen}})"></div>
            <div class="d-flex justify-content-center">
              <a href="{{route('noticia.show', $noticia->url)}}">
                <div class="bg-light p-3 mr-5 ml-5" style="margin-top:-7%">{{$noticia->titulo}}
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
