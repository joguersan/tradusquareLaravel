@extends('layouts.layout')
@section ('metaAdicional')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.23/b-1.6.5/r-2.2.7/sp-1.2.2/sl-1.3.1/datatables.min.css" />
<title>Proyectos de traducción</title>
@endsection
@section('contenido')
<nav aria-label="Navegación por plataforma">
</nav>
<div>
	<table class="table table-striped table-bordered w-100" id="tablaProyectos">
		<thead>
			<tr>
				<th>Juego</th>
				<th>Plataforma</th>
				<th>Estado</th>
				<th>Idioma</th>
				<th>Doblaje</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($fichas as $ficha)
			@foreach ($ficha->plataformas as $plataforma)
			<tr>
				<td class="align-middle">
					<a href="{{route('fichas.show', $ficha)}}">{{$ficha->nombre}}</a>
				</td>

				<td>
					<img src="{{$plataforma->imagen}}" style="width:20px; height:20px" title="{{$plataforma->nombre}}" /> {{$plataforma->nombre}}
				</td>
				<td class="text-center">
					@if ($plataforma->pivot->estado_id == 1)
					<span class="badge bg-success p-1">Completado</span>
					@elseif ($plataforma->pivot->estado_id == 2)
					<span class="badge bg-primary p-1">En proceso</span>
					@elseif ($plataforma->pivot->estado_id == 3)
					<span class="badge bg-warning text-dark p-1">Pausado</span>
					@elseif ($plataforma->pivot->estado_id == 4)
					<span class="badge bg-danger text-dark p-1">Cancelado</span>
					@endif
				</td>
				<td class="align-middle">
					@foreach ($ficha->banderas as $bandera)
					@if ($bandera->pivot->usage == 0)
					{{$bandera->name}}
					@endif
					@endforeach
				</td>
				<td class="align-middle">
					@foreach ($ficha->banderas as $bandera)
					@if ($bandera->pivot->usage == 1)
					{{$bandera->name}}

					@endif
					@endforeach
				</td>
			</tr>

			@endforeach

			@endforeach
		</tbody>
	</table>
</div>
@endsection
@include('partials.javascript')
@section('JSextra')
@include('partials.dataTablesFicha')
@endsection