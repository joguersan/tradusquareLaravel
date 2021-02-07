@extends('layouts.layout')
@section ('metaAdicional')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.23/b-1.6.5/r-2.2.7/sp-1.2.2/sl-1.3.1/datatables.min.css"/>
<title>Proyectos de traducción</title>
@endsection
@section('contenido')
<nav aria-label="Navegación por plataforma">
</nav>
<div>
	<table class="table table-striped table-bordered w-100" id="tablaProyectos">
		<thead>
			<tr>
				<th>Juego</th>
				<th>Plataforma</th>
				<th>Estado</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($fichas as $ficha)
				@foreach ($ficha->plataformas as $plataforma)
				<tr>
					<td class="align-middle">
						<a href="{{route('fichas.show', $ficha)}}">{{$ficha->nombre}}</a>
					</td>

					<td>
						<img src="{{$plataforma->imagen}}" style="width:20px; height:20px" title="{{$plataforma->nombre}}" /> {{$plataforma->nombre}}
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
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.23/b-1.6.5/r-2.2.7/sp-1.2.2/sl-1.3.1/datatables.min.js"></script>
<script type="text/javascript" src="{{asset('js/dataTables.rowsGroup.js')}}"></script>
<script>
$(document).ready(function() {
		// Setup - add a text input to each footer cell
		$('#tablaProyectos tfoot th').each(function() {
			var title = $(this).text();
			$(this).html('<input type="text" placeholder="Buscar por ' + title + '" />');
		});
		// DataTable
		var table = $('#tablaProyectos').DataTable({
			order: [[ 0, "desc" ]],
			dom: 'Plfrtip',
			language: {
					search: "Buscar:",
					paginate: {
            first:      "<<",
            previous:   "<",
            next:       ">",
            last:       ">>"
        },
					searchPanes: {
						"clearMessage": "Borrar todo",
			"collapse": {
					"0": "Paneles de búsqueda",
					"_": "Paneles de búsqueda (%d)"
			},
			"count": "{total}",
			"countFiltered": "{shown} ({total})",
			"emptyPanes": "Sin paneles de búsqueda",
			"loadMessage": "Cargando paneles de búsqueda",
			"title": "Filtros activos - %d"
					}
			},
			searchPanes: {
					 layout: 'columns-2',
					 cascadePanes:'true',
					 viewTotal:'true',
					 columns: [1,2]
			 },
			 columnDefs: [
            {
                searchPanes: {
                    show: true
                },
                targets: [1,2]
            }
        ],
			responsive: {
        details: {
            display: $.fn.dataTable.Responsive.display.modal()
        }
    },
			columns: [
        {
            name: 'first'
        },
        {
            name: 'second'
        },
        {
            name: 'third'
        }
    ],
			rowsGroup: [// Always the array (!) of the column-selectors in specified order to which rows groupping is applied
                // (column-selector could be any of specified in https://datatables.net/reference/type/column-selector)
        'first:name'
			],
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
@endsection
