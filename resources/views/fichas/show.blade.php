@extends('layouts.layout')
@section('metaAdicional')
<title>{{$ficha->nombre}}</title>
@endsection
@section('contenido')

<div class="overlayTitulo overlayFicha w-100 p-3 m-0">
	<h1 class="tituloHeader">{{$ficha->nombre}}</h1>
</div>
<div class="overlaySombra sombraFicha"></div>
<div class="col m-0 w-100 bg-image headerFicha" style="background-image:url('{{$ficha->imagen}}'"></div>

<div class="ficha p-3 mt-3">
	<div class="fichaTitulo tituloHeader bg-primary p-3 flex">
		<i class="fas fa-info-circle"></i> DATOS DEL PROYECTO
	</div>
	<div class="fichaTituloTriangulo"></div>
	<div class="text-black fichaContenido pl-2 pb-2 pr-2 pt-0">
		{!!$ficha->ficha!!}
		<br>
		<strong>Plataforma: </strong>
		@foreach ($ficha->plataformas as $plataforma)
				<img src="{{$plataforma->imagen}}"> {{$plataforma->nombre}} {{$plataforma->pivot->estado}}
		@endforeach
	</div>
</div>
<div class="ficha p-3 mt-3">
	<div class="fichaTitulo tituloHeader bg-primary p-3 flex">
		<i class="fas fa-info-circle"></i> DATOS DEL PROYECTO
	</div>
	<div class="fichaTituloTriangulo"></div>
	<div class="pl-2 pb-2 pr-2 pt-0">
		{!!$ficha->sinopsis!!}
	</div>
</div>
<div class="ficha p-3 mt-3">
	<div class="fichaTitulo bg-primary tituloHeader p-3 flex">
		<i class="fas fa-info-circle"></i> DATOS DEL PROYECTO
	</div>
	<div class="fichaTituloTriangulo"></div>
	<div class="pl-2 pb-2 pr-2 pt-0">
		{!!$ficha->equipo!!}
	</div>
</div>
<div class="ficha text-white p-3 mt-3">
	<div class="fichaTitulo tituloHeader bg-primary p-3 flex">
		<i class="fas fa-info-circle"></i> DATOS DEL PROYECTO
	</div>
	<div class="fichaTituloTriangulo"></div>
	<div class="pl-2 pb-2 pr-2 pt-0">
		{!!$ficha->descarga!!}
	</div>
</div>

@foreach($ficha->noticias as $key=>$value)
	{{$value->titulo}}<br>
	@endforeach
	<a class="btn btn-primary" href="{{route('fichas.edit', $ficha)}}">Editar ficha</a>
	<form method="POST" action="{{route('fichas.destroy', $ficha)}}">
		@csrf
		@method('DELETE')
		<button class="btn btn-primary">Eliminar ficha</button>
	</form>
	@endsection
