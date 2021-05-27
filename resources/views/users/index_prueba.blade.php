@extends('layouts.vuexy')
@section('content')
@php
    $table = 'user';
@endphp
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-8">
                            <h2 class="content-header-title float-left mb-0">Usuarios</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#">Usuarios</a>
                                    </li>
                                    <li class="breadcrumb-item active">Listado
                                    </li>
                                </ol>
                            </div>
                        </div>
                        <div class="col-4">                           
                                <button type="button" class="btn btn-primary"  onclick="window.location.href='{{asset('/users/create')}}'"><span>Nuevo registro</span> </button>    
                        </div>
                        </div>
                    </div>
                </div>
                
    
        
        <div class="card">
            
            <!-- End Breadcrumb-->
                <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                    <div class="card-header"><i class="fa fa-table"></i> Listado de Usuarios</div>
                    <div class="card-body">
                        <br>
                        <div class="table-responsive">
                        <table id="prueba" class="user-list-table table">
                            <thead class="thead-light">
                                <tr>
                                    <th>Role</th>
                                    <th>Plan</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                        </table>
                        </div>
                    </div>
                    </div>
                </div>
                </div><!-- End Row-->
            
        </div>
    
@endsection
@section('scripts')
    @parent
    <!-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.js"></script>
     -->
    <script>
        var table;
        var url_post = '{{route("user-list")}}';
        var table;
        $(document).ready(function () {
            listado();
        });

        function listado() {
             try{ table.destroy(); } catch(err) { /*console.log('No existe app'); */ }
             table = $('#prueba').dataTable({
               //  destroy:true,
      responsive: true,
      dom: 'Bflrtip',
       buttons:[
           {extend: 'csv',
           title: 'Listado de usuarios',
           exportOptions: {
           columns: ':visible'
           }},
           {extend: 'excel',
           title: 'Listado de usuarios',
           exportOptions: {
           columns: ':visible'
           }},
           {extend: 'pdf',
           title: 'Listado de usuarios',
           exportOptions: {
           columns: ':visible'
           }},
           {extend: 'colvis',
           title: 'Listado de usuarios',
           text: 'Columnas'
           },
           ],
           select: true,
           columnDefs: [ {
         } ],
    
            "responsive": true,
            "serverSide": true,
            "processing": true,
            "paging": true,
            "language": {
            "infoFiltered": "",
            "info": "Mostrando  _PAGE_ de _PAGES_",
            "infoEmpty": "Sin resultados",
            "sLengthMenu": "Mostrar _MENU_ resultados",
            "sSearch" : "Buscar",
            "sZeroRecords" : 'Sin resultados',
            "scrollX": true,
            "scrollCollapse": true,
            "paginate": {
                "next": "Siguiente",
                "previous": "Anterior"
            }
		},
        "lengthMenu": [[10, 20, 50, -1], [10, 20, 50, "Todos"]],
        "ajax": {
            "url": url_post,
            "type": "POST",
            "data": function (data) {
                      data._token = "{{{ csrf_token() }}}";
                    }
        },
        "columns": [
                { "data": "name","className": "text-justify", "orderable": true },
                { "data": "email","className": "text-justify", "orderable": true },        
                { "data": "id", "orderable": false, "className": "text-center", "render" : function(data, type, full, meta){
                    //users/3/edit
                    return '<a  class="btn btn-secondary waves-effect waves-light m-1" href="{{asset('/users')}}/'+data+'/edit"><i class="zmdi zmdi-edit"></i></a>';
                } },
                { "data": "id", "orderable": false, "className": "text-center", "render" : function(data, type, full, meta){
                    return '<a class="btn btn-danger waves-effect waves-light m-1" href="javascript:eliminar{{$table}}('+data+');"><i class="fa fa-trash-o"></i></a>';
                } }
        ]
    });
            // table = $('#table_{{$table}}').DataTable({
            //     "ajax": {
            //         "url" : url_post,
            //         "method" : "POST",
            //         "data" : {_token:"{{ csrf_token() }}"}
            //     },
            //     "columns": [
            //         {"data" : "id", "className" : "text-center", "orderable": false},
            //         {"data" : "name"},
            //         {"data" : "proprietary"},
            //         {"data" : "social_reason"},
            //         {"data" : "rfc"},
            //         { "data": "status_id", "className": "text-center", "orderable": false, "render": function ( data, type, row )
            //             {   
            //                 if(data==1){
            //                     return '<span class="badge badge-success">Activo</span>';
            //                 }
            //                 else{
            //                     return '<span class="badge badge-secondary">Inactivo</span>';                            
            //                 }                                                            
            //             }
            //         },
            //         {"data": "uuid", "className" : "text-center", "orderable": false, "render": function (data, type, row) 
            //             {                        
                           
            //                     var url_edit = '';
            //                     url_edit = url_edit.replace(':id', data);
            //                     return '<a class="btn btn-outline bg-primary text-primary-800 btn-icon ml-2" href="'+url_edit+'" data-toggle="tooltip" data-placement="top" title="Editar"><i class="far fa-edit"></i></a>';
                            
            //             }
            //         },             
            //         { "data": "id","className": "text-center", "orderable": false, "render": function ( data, type, row )
            //             {
                    
            //                     return '<a class="btn btn-outline bg-danger text-danger-800 btn-icon ml-2" href="javascript:destroy(\''+data+'\')" data-toggle="tooltip" data-placement="top" title="Eliminar"><i class="far fa-trash-alt"></i></a>';
                           
            //             }
            //         }
            //     ]
            // });
        }

        function destroy(id)
        {
            swal({
                title: "Eliminar",
                text: "¿Esta seguro que desea eliminar el registro?, no podrá deshacer esta acción",
                type: 'warning',
                showCancelButton: true,
                confirmButtonClass: 'btn btn-success',
                cancelButtonClass: 'btn btn-danger',
                confirmButtonText: "Eliminar",
                cancelButtonText: "Cancelar",
                }).then(function (result) {
                    if(result.value) {
                        $.post('',
                        {
                            "_token":"{{ csrf_token() }}",
                            id : id
                        },
                        function(data){
                            listado();
                            swal('Eliminado!','Registro eliminado con éxito!','success');
                        });
                    }
                    else if(result.dismiss === swal.DismissReason.cancel) {
                        swal("Cancelado","La acción fue cancelada",'error');
                    }
                }
            );
        }
    </script>
@endsection