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
						<div class="overlayTitulo overlayFicha w-100 p-3 m-0">
							<h1 class="tituloHeader">@yield('titulo')</h1>
						</div>
						<div class="overlaySombra sombraFicha"></div>
						<div class="col m-0 w-100 bg-image headerFicha" style="background-image:url('{{$ficha->imagen}}')"></div>
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
