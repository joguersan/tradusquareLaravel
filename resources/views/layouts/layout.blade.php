<!DOCTYPE html>
<html lang="es">
<head>
	@include('partials.estilo')
	@yield('metaAdicional')
</head>
<body>
		<div class="container-fluid p-0">
			@include('partials/nav')
			<div class="container-fluid bg-white p-0">
				@yield('headerEntrada')
				<div class="row m-0 p-3">
					<div class="col pb-4 pt-0 pr-4">
							@yield('contenido')
					</div>
				</div>
			</div>
		</div>
		@include('partials/footer')
		@yield(@'JSextra')
	</body>
</html>
