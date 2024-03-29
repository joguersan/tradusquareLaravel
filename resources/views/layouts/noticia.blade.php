<!DOCTYPE HTML>
<html lang="es">

<head>
	@include('partials.estilo')
	@yield('titulo')
	@yield('descripcion')
</head>

<body>
	<div class="container-fluid p-0">
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
									@foreach($ficha->grupos as $grupo)
										<a href="{{route('grupos.show', $grupo)}}">{{$grupo->nombre}}</a>
										@endforeach
										@endforeach
							</div>
						</div>
					</div>
				</div>
				@if ($comentarios)
				<div class="row m-0 p-3 bg-light border">
					@foreach($comentarios as $comentario)
					<div class="col-md-6" id={{$comentario->id}}>
						<div class="row card tarjeta mb-3 bg-white">
							<div class="col-md-12">
								@if ($comentario -> deleted_at == null)
								<div class="row card-header p-1">
									<div class="col-md-6">
										<img loading="lazy" class="rounded-circle imgcirculo" src="https://tradusquare.es/{{ $comentario -> users -> imagen }}" title="Avatar de {{ $comentario -> users -> nombre }}"
										  alt="Avatar de {{ $comentario -> users -> nombre }}" />
										<b>{{ $comentario -> users -> nombre }}</b>
									</div>
									<div class="col-md-5">
										<b>{{ $comentario -> created_at->format('d-m-Y')}}</b>
										<b><a href="{{route('noticia.show', $noticia)}}#{{ $comentario -> id }}">#{{ $comentario -> id }}</a></b>
									</div>
								</div>
								@endif
							</div>
							@if ($comentario -> deleted_at == null)
							<div class="col-md-12 p-3">
								{!! $comentario -> contenido !!}
							</div>
							<ul class="list-group list-group-horizontal">
								<li class="list-group-item">
									<a class="btn btn-primary" href="{{route('comentarios.edit', $comentario)}}">Editar</a>
								</li>
								<li class="list-group-item">
									<form method="POST" action="{{route('comentarios.destroy', $comentario)}}">
										@csrf
										@method('DELETE')
										<button class="btn btn-primary">Eliminar</button>
									</form>
								</li>
							</ul>
							@else
							<div class="col-md-12 p-3">
								Este comentario ha sido eliminado por su autor
							</div>
							@endif
						</div>
					</div>
					@endforeach
				</div>
				@endif
				<div class="row border m-0 mt-2 mb-2 bg-light">
					<form method="POST" action="{{route('comentario.store', $noticia)}}">
						@csrf
						<textarea class="form-control m-2" cols="100" rows="5" placeholder="Escribe tu comentario. Respeta a los demás y escribe sin faltas de ortografía." id="mensaje" name="mensaje"></textarea>
						<button class="btn btn-primary ml-2 mb-2">Enviar comentario</button>
					</form>
				</div>
				<a class="btn btn-primary" href="{{route('noticias.edit', $noticia)}}">Editar noticia</a>
				<form method="POST" action="{{route('noticias.destroy', $noticia)}}">
					@csrf
					@method('DELETE')
					<button class="btn btn-primary">Eliminar noticia</button>
				</form>
			</div>
		</div>
	</div>
	@include('partials/footer')
	@include('partials/javascript')
	@yield('JSextra' )
</body>

</html>