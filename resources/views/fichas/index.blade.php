@extends('layouts.layout')
@section ('metaAdicional')
<link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
<title>Proyectos de traducción</title>
@endsection
@section('contenido')
<nav aria-label="Navegación por plataforma">
	<ul class="flex-wrap pagination pagination-md justify-content-left">
		@foreach ($plataformas as $plataformaItem)
		<li class="page-item"><a class="page-link" href="{{route('plataformas.show', $plataformaItem)}}"><img class="img-fluid mr-2" src="{{$plataformaItem->imagen}}" style="width:20px; height:20px" alt="Imagen {{$plataformaItem->imagen}}">{{$plataformaItem->nombre}}</a></li>
		@endforeach
		<li class="page-item"><a class="page-link" href="/proyectos">Todas</a></li>
	</ul>
</nav>
<div style="max-height:75vh; overflow-y:auto">
	<table class="table table-hover" id="tablaProyectos">
		<thead>
			<tr>
				<th>Imagen</th>
				<th>Juego</th>
				<th>Plataformas</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($fichas as $ficha)
			<tr>
				<td class="w-25" style="background-image:url({{$ficha->imagen}}); background-size:cover">
				</td>
				<td class="w-25 align-middle">
					<a href="{{route('fichas.show', $ficha)}}">{{$ficha->nombre}}</a>
				</td>
				<td class="row w-100 m-0">
					@foreach ($ficha->plataformas as $plataforma)
					<div class="col text-center">
						<a href="/proyectos/{{$plataforma->id}}"><img src="{{$plataforma->imagen}}" style="width:20px; height:20px" title="{{$plataforma->nombre}}" /></a>
						@if ($plataforma->pivot->estado == "Completado")
						<span class="badge badge-success p-1">Completado</span>
					@elseif ($plataforma->pivot->estado == "En proceso")
						<span class="badge badge-primary p-1">En proceso</span>
					@elseif ($plataforma->pivot->estado == "Pausado")
						<span class="badge badge-warning p-1">Pausado</span>
						@endif
					</div>
					@endforeach
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
@endsection

@section('JSextra')
<script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script>
$(document).ready( function () {
	    $('#tablaProyectos').DataTable();
	} );
</script>
@endsection
