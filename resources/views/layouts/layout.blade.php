<!DOCTYPE html>
<html lang="es">
<head>
	@include('partials.estilo')
	@yield('metaAdicional')
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
					</div>
					@include('partials/barraLateral')
				</div>
			</div>
		</div>
		@include('partials/footer')
		@include('partials/javascript')
		@yield(@'JSextra')
	</body>
</html>
