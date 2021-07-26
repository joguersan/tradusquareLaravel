@extends('layouts.layout')

@section('contenido')
<nav aria-label="Navegación por plataforma">
	<ul class="flex-wrap pagination pagination-sm justify-content-left">
		@foreach ($plataformas as $platform)
		<li class="page-item {{ setActive('android') }}"><a class="page-link" href="/plataformas/{{$platform->url}}"><img loading="lazy" class="img-fluid mr-2" src="{{$platform->imagen}}" style="width:20px; height:20px">{{$platform->nombre}}</a></li>
		@endforeach
		<li class="page-item"><a class="page-link" href="/proyectos">Todas</a></li>
	</ul>
</nav>
<div style="max-height:75vh; overflow-y:auto">
	<table class="table table-striped table-bordered table-hover">
		@foreach ($plata as $plat)
		<tr>
			<td class="w-25" style="background-image:url({{$plat->imgFicha}}); background-size:cover; background-position:center">
			<td class="w-25">
				<a href="{{route('fichas.show', $plat->urlFicha)}}">
					{{$plat->nombreFicha}}
				</a>
			</td>
			<td class="text-center w-50">
				<img loading="lazy" class="img-fluid mr-2" style="width:20px; height:20px" src="{{$plat->platImagen}}"><span class="badge badge-success">Completado
</div>
</td>
</tr>
@endforeach
</table>
</div>
@endsection