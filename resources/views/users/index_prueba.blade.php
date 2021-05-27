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
                        <table id="prueba" class=" table">
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
         var url_post = '{{route("user-list")}}';
        var table;
      

var table{{$table}};

$(document).ready(function() {
   table{{$table}} = $('#prueba').DataTable({
      responsive: true,
      "order": [],
      dom: 'Bfrtip',
       buttons:[
           {extend: 'csv',
           exportOptions: {
           columns: ':visible'
           }},
           {extend: 'excel',
           exportOptions: {
           columns: ':visible'
           }},
           {extend: 'pdf',
           exportOptions: {
           columns: ':visible'
           }},
          
         
           ],
           select: true,           
            "responsive": true,
            "serverSide": false,
            "paging": true,
            "autoWidth": false,
            "language": {
			   "info": "Página _PAGE_ a _PAGES_",
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
            "data" : {_token:"{{ csrf_token() }}" }
        },
        "columns": [

                { "data": "name","className": "text-justify", "orderable": true },
                { "data": "name","className": "text-justify", "orderable": true },
        ]
    });







});
 

     
    </script>
@endsection