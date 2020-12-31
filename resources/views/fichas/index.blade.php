@extends('layouts.layout')
@section ('metaAdicional')
<link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
<title>Proyectos de traducción</title>
@endsection
@section('contenido')
<nav aria-label="Navegación por plataforma">
	<ul class="flex-wrap pagination pagination-md justify-content-left">
		@foreach ($plataformas as $plataformaItem)
		<li class="page-item"><a class="page-link" href="{{route('plataformas.show', $plataformaItem)}}"><img class="img-fluid mr-2" src="{{$plataformaItem->imagen}}" style="width:20px; height:20px"
				  alt="Imagen {{$plataformaItem->imagen}}">{{$plataformaItem->nombre}}</a></li>
		@endforeach
		<li class="page-item"><a class="page-link" href="/proyectos">Todas</a></li>
	</ul>
</nav>
<div>
	<table class="table table-striped table-bordered w-100" id="tablaProyectos">
		<thead>
			<tr>
				<th>Imagen</th>
				<th>Juego</th>
				<th>Plataforma</th>
				<th>Estado</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($fichas as $ficha)
			@foreach ($ficha->plataformas as $plataforma)
			<tr>
				<td style="background-image:url({{$ficha->imagen}}); background-size:cover"></td>
				<td class="align-middle">
					<a href="{{route('fichas.show', $ficha)}}">{{$ficha->nombre}}</a>
				</td>
				<td>
					<a href="/proyectos/{{$plataforma->id}}"><img src="{{$plataforma->imagen}}" style="width:20px; height:20px" title="{{$plataforma->nombre}}" /> {{$plataforma->nombre}}</a>
				</td>
				<td class="text-center">
					@if ($plataforma->pivot->estado == "Completado")
					<span class="badge badge-success p-1">Completado</span>
					@elseif ($plataforma->pivot->estado == "En proceso")
					<span class="badge badge-primary p-1">En proceso</span>
					@elseif ($plataforma->pivot->estado == "Pausado")
					<span class="badge badge-warning p-1">Pausado</span>
				@elseif ($plataforma->pivot->estado == "Cancelado")
					<span class="badge badge-danger p-1">Cancelado</span>
					@endif
				</td>
			</tr>
			@endforeach
			@endforeach
		</tbody>
		<tfoot>
			<tr>
				<th>Imagen</th>
				<th>Juego</th>
				<th>Plataformas</th>
				<th>Estado</th>
			</tr>
		</tfoot>
	</table>
</div>
@endsection
@include('partials.javascript')
@section('JSextra')
<script src="//cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script>
$(document).ready(function() {
		// Setup - add a text input to each footer cell
		$('#tablaProyectos tfoot th').each(function() {
			var title = $(this).text();
			$(this).html('<input type="text" placeholder="Buscar por ' + title + '" />');
		});

		// DataTable
		var table = $('#tablaProyectos').DataTable({
			initComplete: function() {
				// Apply the search
				this.api().columns().every(function() {
					var that = this;

					$('input', this.footer()).on('keyup change clear', function() {
						if (that.search() !== this.value) {
							that
								.search(this.value)
								.draw();
						}
					});
				});
			}
		});

	});
</script>
<script>
/*
$(document).ready(function() {
    var table = $('#tablaProyectos').DataTable();

    $("#tablaProyectos tfoot th").each( function ( i ) {
        var select = $('<select><option value=""></option></select>')
            .appendTo( $(this).empty() )
            .on( 'change', function () {
                table.column( i )
                    .search( $(this).val() )
                    .draw();
            } );

        table.column( i ).data().unique().sort().each( function ( d, j ) {
            select.append( '<option value="'+d+'">'+d+'</option>' )
        } );
    } );
} );*/
</script>
@endsection
