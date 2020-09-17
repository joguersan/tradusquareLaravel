<!DOCTYPE HTML>
<html lang="es">

<head>
	@include('partials.estilo')
	@yield('titulo')
	@yield('descripcion')
</head>

<body>
	<div class="container-fluid p-0">
		<div class="col text-center p-0 cabecera">
		</div>
		@include('partials/nav')
		<div class="container-fluid bg-white p-0">
			@yield('headerEntrada')
			<div class="col p-5">
				@yield('contenido')
				<div class="text-center p-3 bordeAzul mb-5">
					<div class="seccionNoticia tituloHeader overlayTitulo p-1 w-50" style="font-size:1.5rem">¿Te ha gustado? ¡Compártelo!</div>
					@include('partials/share')
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="p-3 bordeAzul mb-3">
							<div class="text-center seccionNoticia tituloHeader overlayTitulo p-1" style="font-size:1.5rem">Proyectos relacionados</div>
							<div class="col">
								@foreach($noticia->fichas as $ficha)
									<a href="{{route('fichas.show', $ficha)}}">{{$ficha->nombre}}</a>
									@endforeach
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="p-3 bordeAzul mb-3">
							<div class="text-center seccionNoticia tituloHeader overlayTitulo p-1" style="font-size:1.5rem">Grupos relacionados</div>
							<div class="col">
								@foreach($noticia->fichas as $ficha)
									<a href="{{route('fichas.show', $ficha)}}">{{$ficha->nombre}}</a>
									@endforeach
							</div>
						</div>
					</div>
				</div>
				<div class="row m-0 p-3 bg-secondary">
					@foreach($noticia->comentarios as $comentario)
						<div class="col-md-6">
						<div class="row tarjeta mb-3 bg-white">
							<div class="col-md-12">
								<div class="row overlayTitulo text-white p-1">
									<div class="col-md-6">
										<b>{{ $comentario -> usuario }}</b>
									</div>
									<div class="col-md-6">
										<b>{{ $comentario -> created_at->format('d-m-Y')}}</b>
									</div>
								</div>
							</div>
							<div class="col-md-12 p-3">
								{{ $comentario -> mensaje }}
							</div>
						</div>
					</div>
						@endforeach
				</div>
				<a class="btn btn-primary" href="{{route('noticias.edit', $noticia)}}">Editar noticia</a>
				<form method="POST" action="{{route('noticias.destroy', $noticia)}}">
					@csrf
					@method('DELETE')
					<button class="btn bt-primary">Eliminar noticia</button>
				</form>
			</div>
		</div>
	</div>
	@include('partials/javascript')
	@yield('JSextra' )
</body>

</html>
