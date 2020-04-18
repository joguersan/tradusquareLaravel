@extends('layouts.ficha')
@section('metaAdicional')
<title>{{$ficha->nombre}}</title>
@endsection

@section('titulo')
	{{$ficha->nombre}}
@endsection

@section('imagen')
	{{$ficha->imagen}}
@endsection

@section('contenido')
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
				<img src="{{$plataforma->imagen}}" alt="{{$plataforma->nombre}}"> {{$plataforma->nombre}} {{$plataforma->pivot->estado}}
		@endforeach
	</div>
</div>

@if ($ficha->sinopsis!=NULL)
<div class="ficha p-3 mt-3">
	<div class="fichaTitulo tituloHeader bg-primary p-3 flex">
		<i class="fas fa-scroll"></i> SINOPSIS DEL JUEGO
	</div>
	<div class="fichaTituloTriangulo"></div>
	<div class="pl-2 pb-2 pr-2 pt-0">
		{!!$ficha->sinopsis!!}
	</div>
</div>
@endif

@if ($ficha->equipo!=NULL)
<div class="ficha p-3 mt-3">
	<div class="fichaTitulo bg-primary tituloHeader p-3 flex">
		<i class="fas fa-user-friends"></i> EQUIPO
	</div>
	<div class="fichaTituloTriangulo"></div>
	<div class="pl-2 pb-2 pr-2 pt-0 fichaContenido">
		{!!$ficha->equipo!!}
	</div>
</div>
@endif

<div class="ficha p-3 mt-3">
	<div class="fichaTitulo bg-primary tituloHeader p-3 flex">
		<i class="fas fa-tasks"></i> PORCENTAJES DEL PROYECTO
	</div>
	<div class="fichaTituloTriangulo"></div>
	<div class="pl-2 pb-2 pr-2 pt-0 fichaContenido">
	</div>
</div>
@if ($ficha->info!=NULL)
<div class="ficha p-3 mt-3">
	<div class="fichaTitulo bg-primary tituloHeader p-3 flex">
		<i class="fas fa-question-circle"></i> INFORMACIÓN ADICIONAL
	</div>
	<div class="fichaTituloTriangulo"></div>
	<div class="pl-2 pb-2 pr-2 pt-0 fichaContenido">
	</div>
</div>
@endif

@if ($ficha->descarga!=NULL)
<div class="ficha text-white p-3 mt-3">
	<div class="fichaTitulo tituloHeader bg-primary p-3 flex">
		<i class="fas fa-download"></i> LINKS DE DESCARGA
	</div>
	<div class="fichaTituloTriangulo"></div>
	<div class="pl-2 pb-2 pr-2 pt-0">
		{!!$ficha->descarga!!}
	</div>
</div>
@endif

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
