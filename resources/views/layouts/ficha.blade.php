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
					<div class="col p-5">
						<div class="overlayTitulo overlayFicha w-100 p-3 m-0">
							<h1 class="tituloHeader">@yield('titulo')</h1>
						</div>
						<div class="col m-0 w-100 bg-image headerFicha" style="background-image:url('{{$ficha->imagen}}')">
							<div class="overlaySombra sombraFicha"></div>
						</div>
							@yield('contenido')
							<div class="text-center p-3 bordeAzul mt-1">
								<div class="col-md-4"></div>
								<div class="seccionNoticia tituloHeader overlayTitulo p-1 col-md-6" style="font-size:1.5rem">¡Comparte esta traducción!</div>
								@include('partials/share')
							</div>
					</div>
			</div>
		</div>
		@include('partials/footer')
		@include('partials/javascript')
		@yield(@'JSextra')
	</body>
</html>
