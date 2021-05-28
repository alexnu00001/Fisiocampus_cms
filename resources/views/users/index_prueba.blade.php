@extends('layouts.vuexy')
    <?php
        $table = 'users'
    ?>
    <style>
        .dt-button {
            padding: 0;
            border: none;
        }
    </style>
@section('header')
<div class="content-header row">
    <div class="content-header-left col-md-9 col-12 mb-2">
        <div class="row breadcrumbs-top">
            <div class="col-12">
                <h2 class="content-header-title float-left mb-0">Usuarios</h2>
                <div class="breadcrumb-wrapper">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Inicio</a>
                        </li>                        
                        <li class="breadcrumb-item active">Listado de usuarios
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
        <div class="form-group breadcrumb-right">            
            <button type="button" class="btn btn-flat-primary waves-effect">Regresar</button>
        </div>
    </div>
</div>
@endsection
@section('content')
<div class="content-body">

 <!-- Row grouping -->
 <section id="complex-header-datatable">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header border-bottom">
                    <h4 class="card-title">Listado de Usuarios</h4>
                    <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
                        <div class="form-group breadcrumb-right">            
                            <button type="button" class="btn add-new btn-primary mt-50">Nuevo registro</button>
                        </div>
                    </div>
                </div>
                <div class="card-datatable">
                    <table id="again" class="table">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Correo</th>
                                <th>Editar</th>
                                <th>Eliminar</th>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Name</th>
                                <th>Correo</th>
                                <th>Editar</th>
                                <th>Eliminar</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/ Row grouping -->
</div> 
@endsection
@section('scripts')
    @parent    
<script>    
    $(document).ready(function () {
        list();//Invoke
    });

    //List DataTable
    function list() {
        let table;
        let url_post = "{{ route('user-list') }}";

        try{ table.destroy(); } catch(err) { /*console.log('No existe app'); */ }
        table = $('#again').DataTable({                
            "ajax": {
                "url" : url_post,
                "method" : "POST",
                "data" : {_token:"{{ csrf_token() }}"}
            },
            "columns": [
                { "data": "name","className": "text-justify", "orderable": true },
                { "data": "email","className": "text-justify", "orderable": true },
                { "data": "id", "orderable": false, "className": "text-center", "render" : function(data, type, full, meta){                                    
                    return '';
                } },
                { "data": "id", "orderable": false, "className": "text-center", "render" : function(data, type, full, meta){
                    return '';
                } }
                
            ]
        });
    }


 
</script>

@endsection