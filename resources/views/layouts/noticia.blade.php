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
			<div class="row m-0 p-3">
				<div class="col-md-9 pb-4 pt-0 pr-4">
					@yield('contenido')
					<div class="p-3 border mb-3">
						<div class="row">
							<div class="col-md-6">
								@foreach($noticia->fichas as $ficha)
									{{$ficha->nombre}}
									@endforeach
							</div>
						</div>
					</div>
				
					<a class="btn btn-primary" href="{{route('noticias.edit', $noticia)}}">Editar noticia</a>
					<form method="POST" action="{{route('noticias.destroy', $noticia)}}">
						@csrf
						@method('DELETE')
						<button class="btn primary">Eliminar noticia</button>
					</form>
				</div>
				@include('partials/barraLateral')
			</div>
		</div>
	</div>
	@include('partials/footer')
	@include('partials/javascript')
	@yield('JSextra' )
</body>

</html>
