<!DOCTYPE html>
<html lang="es">
<head>
	@include('partials.estilo')
	@yield('metaAdicional')
</head>
<body class="bg-light fondo">
		<div class="container-fluid p-0">
			@include('partials/nav')
			<div class="container-fluid p-0">
				@yield('headerEntrada')
				<div class="row mb-5 m-0">
							@yield('contenido')
				</div>
			</div>
		</div>
		@include('partials/footer')
		@yield(@'JSextra')
	</body>
</html>
