@extends('layouts.ficha')
@section('metaAdicional')
<title>Traducción {{$ficha->nombre}}</title>
<meta name="description" content="Parche de traducción para el juego {{$ficha->nombre}} por el equipo @foreach($ficha->grupos as $grupo){{$grupo-> nombre}} @endforeach"
@endsection

@section('titulo')
{{$ficha->nombre}}
@endsection

@section('imagen')
{{$ficha->imagen}}
@endsection

@section('contenido')
<div class="row justify-content-around">
	<div class="col-md-6 ficha p-3 mt-3">
		<div class="fichaTitulo tituloHeader bg-primary p-3 flex">
			<i class="fas fa-info-circle"></i> DATOS DEL PROYECTO
		</div>
		<div class="fichaTituloTriangulo"></div>
		<div class="text-black fichaContenido pl-2 pb-2 pr-2 pt-0">
			{!!$ficha->ficha!!}
			<br>
			<strong>Traducido por: </strong>
			@foreach ($ficha->grupos as $grupo)
			<a href="{{route('grupos.show', $grupo)}}">{{$grupo->nombre}}</a>
			@endforeach
			<br>
			<strong>Plataforma: </strong>
			@foreach ($ficha->plataformas as $plataforma)
			<span title="{{$plataforma->nombre}}" class="badge {{getStatusBadge($plataforma->pivot->estado)}} p-1"><img src="{{$plataforma->imagen}}" alt="{{$plataforma->nombre}}"> {{$plataforma->pivot->estado}}</span>
			@endforeach
		</div>
	</div>
	@if ($ficha->equipo!=NULL)
	<div class="col-md-5 ficha p-3 mt-3">
		<div class="fichaTitulo bg-primary tituloHeader p-3 flex">
			<i class="fas fa-user-friends"></i> EQUIPO
		</div>
		<div class="fichaTituloTriangulo"></div>
		<div class="pl-2 pb-2 pr-2 pt-0 fichaContenido">
			{!!$ficha->equipo!!}
		</div>
	</div>
	@endif
</div>

<div class="row">
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
</div>
<div class="row justify-content-around">
	<div class="col-md-6 ficha p-3 mt-3">
		<div class="fichaTitulo bg-primary tituloHeader p-3 flex">
			<i class="fas fa-tasks"></i> PORCENTAJES DEL PROYECTO
		</div>
		<div class="fichaTituloTriangulo"></div>
		<div class="pl-2 pb-2 pr-2 pt-0 fichaContenido">
			@foreach ($ficha->porcentajes as $porcentaje)
			<div class="progress position-relative mb-1 {{hideBars($porcentaje->titulo_porcentaje)}}">
				<div class="progress-bar {{ratingColor($porcentaje->valor_porcentaje)}}" role="progressbar" style="width:{{$porcentaje->valor_porcentaje}}%" aria-valuenow="{{$porcentaje->valor_porcentaje}}" aria-valuemin="0" aria-valuemax="100">
				</div>
				<small class="porcentaje justify-content-center align-self-center d-flex position-absolute w-100">{{$porcentaje->titulo_porcentaje}}: {{$porcentaje->valor_porcentaje}}%</small>
			</div>
			@endforeach
		</div>
	</div>
	@if ($ficha->descarga!=NULL)
	<div class="col-md-5 ficha text-white p-3 mt-3">
		<div class="fichaTitulo tituloHeader bg-primary p-3 flex">
			<i class="fas fa-download"></i> LINKS DE DESCARGA
		</div>
		<div class="fichaTituloTriangulo"></div>
		<div class="pl-2 pb-2 pr-2 pt-0">
			{!!$ficha->descarga!!}
		</div>
	</div>
	@endif
</div>
@foreach($ficha->noticias as $noticia)
	<a href="{{route('noticias.show', $noticia)}}">{{$noticia->titulo}}</a><br>
	@endforeach
	<a class="btn btn-primary" href="{{route('fichas.edit', $ficha)}}">Editar ficha</a>
	<form method="POST" action="{{route('fichas.destroy', $ficha)}}">
		@csrf
		@method('DELETE')
		<button class="btn btn-primary">Eliminar ficha</button>
	</form>
	@endsection