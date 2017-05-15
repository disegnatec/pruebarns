/*
 *  Document   : tablesDatatables.js
 *  Author     : pixelcave
 *  Description: Custom javascript code used in Tables Datatables page
 */

//
// Pipelining function for DataTables. To be used to the `ajax` option of DataTables
//


// Register an API method that will empty the pipelined data, forcing an Ajax
// fetch on the next draw (i.e. `table.clearPipeline().draw()`)
$.fn.dataTable.Api.register('clearPipeline()', function () {
    return this.iterator('table', function (settings) {
        settings.clearCache = true;
    });
});

var DatatablesSettings = {
    "language": {
        "emptyTable": "No se encontraron registros",
        "info": "Mostrando _START_ a _END_ de _TOTAL_ resultados",
        "infoEmpty": "Mostrando 0 a 0 de 0 resultados",
        "infoFiltered": "(filtrado de _MAX_ total resultados)",
        "infoPostFix": "",
        "thousands": ",",
        "lengthMenu": "Mostrar _MENU_ resultados",
        "loadingRecords": "Cargando...",
        "processing": "Procesando...",
        // "search": "Buscar:",
        "zeroRecords": "No se encontraron resultados",
        "paginate": {
            "first": "Primero",
            "last": "Ultimo",
            "next": "Siguiente",
            "previous": "Anterior"
        },
        "aria": {
            "sortAscending": ": activar ordenar columnas ascendente",
            "sortDescending": ": activar ordenar columnas descendente"
        }


    },
    "buttons": [
        {
            extend: 'pdf',
            extension: '.pdf',
            filename: 'export'

        },
        {
            extend: 'csv',
            extension: '.csv',
            filename: 'export'

        },
        {
            extend: 'excel',
            extension: '.xlsx',
            filename: 'export'

        },
        'print',
        'copyHtml5'
    ],
    "dom": '<"row"<"pull-left"f><"pull-right"l>>rt<"row"<"pull-left"i><"pull-right"pB>>',
};
var TablesDatatables = function () {

    return {
        init: function (orderby, datatable, order) {
            var oder_col = orderby || 0;
            var order_order = order || 'desc';

            /* Initialize Bootstrap Datatables Integration */
            App.datatables();

            /* Initialize Datatables */

            if (datatable) {
                // console.log(datatable);
                datatable_elemnt = $('#' + datatable);
                //console.log(datatable_elemnt);
            }
            else {
                datatable_elemnt = $('.dataTable');
            }
            var table = datatable_elemnt.DataTable({
                    retrieve: true,

                    columnDefs: [
                        {width: '2%', targets: 0}
                    ],
                    "iDisplayLength": 20,
                    fixedColumns: true,
                    "aLengthMenu": [[10, 20, 30, -1], [10, 20, 30, "All"]],
                    "order": [[oder_col, order_order]],
                    "scrollY": "300px",
                    "scrollCollapse": true,
                    "dom": DatatablesSettings.dom,
                    buttons: DatatablesSettings.buttons,
                    "language": DatatablesSettings.language,
                    "fnInitComplete": function () {

                        setTimeout(function () {
                            $('div.dataTables_filter input').focus();
                        }, 5);


                    },
                })
            ;
            /* Add placeholder attribute to the search input */
            // $('.dataTables_filter input').attr('placeholder', 'Buscar');
        }
    };
}();
