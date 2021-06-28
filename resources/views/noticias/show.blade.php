@extends('layouts.noticia')
@section('titulo')
<title>{{$noticia->titulo}}</title>
@endsection

@section('descripcion')
<meta name="description" content="{{$noticia->contenido}}">
@endsection

@section('contenido')
<div class="overlayTitulo overlayFicha w-100 p-3 m-0">
	<h1 class="tituloHeader">{{$noticia->titulo}}</h1>
</div>
<div class="col m-0 mt-2 w-100 bg-image headerFicha" style="background-image:url('{{$noticia->imagen}}')">
	<div class="overlaySombra sombraEntrada">
		<h4 class="flex tituloSubHeader"><b class="mr-5"><i class="fas fa-clock mr-2"></i>{{$noticia->updated_at->diffForHumans()}}</b><b>{{$noticia->autor->nombre}}</b></h4>
	</div>
</div>


<div class="border p-3 mb-5">{!!$noticia->contenido!!}</div>

@endsection