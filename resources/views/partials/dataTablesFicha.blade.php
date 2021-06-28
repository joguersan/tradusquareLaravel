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
            order: [
                [0, "desc"]
            ],
            dom: 'Plfrtip',
            language: {
                search: "Buscar:",
                paginate: {
                    first: "«",
                    previous: "<",
                    next: ">",
                    last: "»"
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
                layout: 'columns-4',
                cascadePanes: 'true',
                viewTotal: 'true',
                columns: [1, 2, 3, 4]
            },
            columnDefs: [{
                searchPanes: {
                    show: true
                },
                targets: [1, 2, 3, 4]
            }],
            responsive: {
                details: {
                    display: $.fn.dataTable.Responsive.display.modal()
                }
            },
            columns: [{
                    name: 'first'
                },
                {
                    name: 'second'
                },
                {
                    name: 'third'
                },
                {
                    name: 'fourth'
                },
                {
                    name: 'fifth'
                }
            ],
            rowsGroup: [ // Always the array (!) of the column-selectors in specified order to which rows groupping is applied
                // (column-selector could be any of specified in https://datatables.net/reference/type/column-selector)
                'first:name'
            ],

        });

    });
</script>