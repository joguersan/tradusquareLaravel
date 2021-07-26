@extends('layouts.layout')
@section('contenido')

<img loading="lazy" src="{{$grupo->logo}}" />
<h1>{{$grupo->nombre}}</h1>

<div class="row p-3">
	<div class="col-md-6 p-0 border border-primary">
		<div class="font-weight-bold flex p-2 bg-primary text-white text-center">
			<i class="fas fa-user-friends"></i> Integrantes
		</div>
		<div class="col m-0 p-0">
			@foreach($grupo->usuarios as $usr)
				<div class="p-2 bg-light border">{{$usr->nombre}}</div>
				@endforeach
		</div>
	</div>
	<div class="col-md-6 border border-warning p-0">
		<div class="col font-weight-bold d-flex p-2 bg-warning text-white justify-content-center">
			<i class="large material-icons mr-2">library_books</i>Descripción
		</div>
		<div class=" p-3">
			{!!$grupo->descripcion!!}
		</div>
	</div>
</div>
<div class="border p-0 mt-3" style="border-color:purple">
	<div class="col font-weight-bold d-flex p-2 text-white  justify-content-center" style="background-color:purple">
		<i class="large material-icons mr-2">contacts</i>Últimas noticias
	</div>
	<div class="d-grid gap-3">
		@foreach($grupo->fichas as $ficha)
			@foreach($ficha->noticias as $noticia)
				<div class="p-2 bg-light border"><a href="{{route('noticia.show',$noticia->url)}}">{{$noticia->titulo}}</a></div>
				@endforeach
				@endforeach
	</div>
</div>
<div class="border border-success p-0 mt-3">
	<div class="col font-weight-bold d-flex p-2 bg-success text-white justify-content-center">
		<i class="large material-icons mr-2">save_alt</i>Proyectos
	</div>
	<table class="table text-left table-hover">
		@foreach ($grupo->fichas as $ficha)
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
						<td rowspan="{{count($ficha->plataformas)}}" class="p-3 text-center">
							Actualizada el {{getUpdatedAtAttribute($ficha->updated_at)}}
						</td>
						@endif
			</tr>
			@endforeach
			@endforeach
	</table>
</div>

@endsection