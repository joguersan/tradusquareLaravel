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
					<div class="col-md-3 border rounded">
						<h4 class="text-center pt-2"><b>¡SÍGUENOS!</b></h4>
						<hr>
						<div class="row m-0 p-0">
							<div class="col-3 p-1">
								<a href="https://twitter.com/tradusquare"><p class="twitter fab fa-twitter-square fa-3x"></p></a>
							</div>
							<div class="col-3 p-1">
								<a href="https://discord.gg/btWHXCE"><p class="discord fab fa-discord fa-3x"></p></a>
							</div>
							<div class="col-3 p-1">
								<a href="https://www.youtube.com/channel/UCQDCUYnxWlEmcuWpwIlNhuw"><p class="youtube fab fa-youtube-square fa-3x"></p></a>
							</div>
							<div class="col-3 p-1">
								<a href="https://twitch.tv/tradusquare"><p class="twitch fab fa-twitch fa-3x"></p></a>
							</div>
						</div>
						Comentarios
					</div>
				</div>
			</div>
		</div>
		@include('partials/footer')
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
@yield(@'JSextra')
	</body>
</html>
