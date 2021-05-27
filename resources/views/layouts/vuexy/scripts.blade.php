
<!-- BEGIN: Vendor JS-->
<script src="{{asset('vuexy/app-assets/vendors/js/vendors.min.js')}}"></script>
<!-- BEGIN Vendor JS-->

<!-- BEGIN: Page Vendor JS-->
<script src="{{asset('vuexy/app-assets/vendors/js/tables/datatable/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('vuexy/app-assets/vendors/js/tables/datatable/datatables.bootstrap4.min.js')}}"></script>
<script src="{{asset('vuexy/app-assets/vendors/js/tables/datatable/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('vuexy/app-assets/vendors/js/tables/datatable/responsive.bootstrap4.js')}}"></script>
<script src="{{asset('vuexy/app-assets/vendors/js/tables/datatable/datatables.buttons.min.js')}}"></script>
<script src="{{asset('vuexy/app-assets/vendors/js/tables/datatable/buttons.bootstrap4.min.js')}}"></script>
<script src="{{asset('vuexy/app-assets/vendors/js/forms/validation/jquery.validate.min.js')}}"></script>
<!-- END: Page Vendor JS-->

<!-- BEGIN: Theme JS-->
<script src="{{asset('vuexy/app-assets/js/core/app-menu.js')}}"></script>
<script src="{{asset('vuexy/app-assets/js/core/app.js')}}"></script>
<!-- END: Theme JS-->

{{-- <!-- BEGIN: Page JS-->
<script src="{{asset('vuexy/app-assets/js/scripts/pages/app-user-list.js')}}"></script>
<!-- END: Page JS--> --}}

<!-- BEGIN: Page Vendor JS-->
<script src="{{asset('vuexy/app-assets/vendors/js/charts/apexcharts.min.js')}}"></script>
<script src="{{asset('vuexy/app-assets/vendors/js/extensions/toastr.min.js')}}"></script>
<script src="{{asset('vuexy/app-assets/vendors/js/extensions/moment.min.js')}}"></script>

{{-- <script src="{{asset('vuexy/app-assets/vendors/js/tables/datatable/datatables.min.js')}}"></script> --}}

{{-- Valdiate forms --}}
<script src="{{asset('vuexy/app-assets/vendors/js/forms/select/select2.full.min.js')}}"></script>
<script src="{{asset('vuexy/app-assets/vendors/js/forms/validation/jquery.validate.min.js')}}"></script>
<script src="{{asset('vuexy/app-assets/vendors/js/pickers/flatpickr/flatpickr.min.js')}}"></script>
<script src="{{asset('vuexy/app-assets/js/scripts/forms/form-validation.js')}}"></script>

<script src="{{asset('vuexy/app-assets/vendors/js/tables/datatable/pdfmake.min.js')}}"></script>
<script src="{{asset('vuexy/app-assets/vendors/js/tables/datatable/buttons.print.min.js')}}"></script>
<script src="{{asset('vuexy/app-assets/vendors/js/tables/datatable/buttons.html5.min.js')}}"></script>
<script src="{{asset('vuexy/app-assets/vendors/js/tables/datatable/dataTables.rowGroup.min.js')}}"></script>
<script src="{{asset('vuexy/app-assets/vendors/js/tables/datatable/vfs_fonts.js')}}"></script>
<script src="{{asset('vuexy/app-assets/vendors/js/tables/datatable/jszip.min.js')}}"></script>

{{-- <script src="{{asset('vuexy/app-assets/vendors/js/tables/datatable/datatables.checkboxes.min.js')}}"></script>
 --}}

 
<script>
    $(window).on('load', function() {
        if (feather) {
            feather.replace({
                width: 14,
                height: 14
            });
        }
    })
</script>

 <script>
       $.extend($.fn.dataTable.defaults, {
        serverSide: true,
        autoWidth: false,
        responsive: true,
        processing: true,
        select: true,
        ordering: true,
        dom:'<"card-header border-bottom p-1"<"head-label"><"dt-action-buttons text-right"B>><"d-flex justify-content-between align-items-center mx-0 row"<"col-sm-12 col-md-6"l><"col-sm-12 col-md-6"f>>t<"d-flex justify-content-between mx-0 row"<"col-sm-12 col-md-6"i><"col-sm-12 col-md-6"p>>',       
        buttons: {            
                    dom: {
                        button: {
                            className: 'btn'
                        }
                    },
                    buttons: [                                   
                        {
                            extend: 'excelHtml5',
                            className: 'btn-outline-primary waves-effect',
                            text: 'Excel',
                        },                    
                        {
                            extend: 'pdfHtml5',
                            className: 'btn btn-outline-primary waves-effect',
                            text: 'PDF'
                        },
                        {
                            extend: 'print',
                            className: 'btn btn-outline-primary waves-effect',
                            text: 'Imprimir'
                        },
                        {
                            extend: 'csv',
                            className: 'btn btn-outline-primary waves-effect',
                            text: 'CSV'
                        },
                        {
                            extend: 'copy',
                            className: 'btn btn-outline-primary waves-effect',
                            text: 'Copiar'
                        },
                        
                    ]
            },
        responsive: {
            details: {
            display: $.fn.dataTable.Responsive.display.modal({
                header: function (row) {
                var data = row.data();
                return 'Details of ' + data['full_name'];
                }
            }),
            type: 'column',
            renderer: function (api, rowIdx, columns) {
                var data = $.map(columns, function (col, i) {
                console.log(columns);
                return col.title !== '' // ? Do not show row in modal popup if title is blank (for check box)
                    ? '<tr data-dt-row="' +
                        col.rowIndex +
                        '" data-dt-column="' +
                        col.columnIndex +
                        '">' +
                        '<td>' +
                        col.title +
                        ':' +
                        '</td> ' +
                        '<td>' +
                        col.data +
                        '</td>' +
                        '</tr>'
                    : '';
                }).join('');

                return data ? $('<table class="table"/>').append(data) : false;
            }
            }
        },
        language: {
            "info": "<span>Mostrando</span> _PAGE_ de _PAGES_",
            "infoEmpty": "Sin resultados",
            "emptyTable": "No hay registros disponibles",
            "sLengthMenu": "<span>Mostrar:</span> _MENU_",
            "sSearch": "<span>Buscar:</span> _INPUT_",
            "sSearchPlaceholder": "Buscar...",
            "sZeroRecords": 'Sin registros',
            "sLoadingRecords": 'Cargando...',
            "infoFiltered": "(filtrado de _MAX_ registros totales)",
            "scrollX": true,
            "scrollCollapse": true,
            "paginate": {
                "next": "Siguiente",
                "previous": "Anterior"
            }
        },
        lengthMenu: [
            [10, 20, 50, -1],
            [10, 20, 50, "Todos"]
        ],
        ajax: {
            "error": function(jqXHR, textStatus, errorThrown) {
                // var responseText = jQuery.parseJSON(jqXHR.responseText);
                // var notice = new PNotify({
                //     title: 'Error',
                //     text: responseText.message,
                //     type: 'error',
                //     addclass: 'click-2-close',
                // });

                // notice.get().click(function() {
                //     notice.remove();
                // });
            }
        }
    });
 </script>