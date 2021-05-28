@extends('layouts.app')

@section('title', 'Articulos')

@section('content')
<section id="complex-header-datatable">
  {{-- <div class="card-body">
    @include('flash::message')
  </div> --}}
  <div class="row" id="table-head">
      <div class="col-12">
          <div class="card">
              <div class="card-header border-bottom">
                  <h4 class="card-title">Listado de Articulos</h4>
                  <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
                      <div class="form-group breadcrumb-right">            
                          <button type="button" onclick="window.location.href='{{route('articulos.create')}}'"  class="btn add-new btn-primary mt-50">Nuevo registro</button>
                      </div>
                  </div>
              </div>
              <div class="card-datatable">                
                @section('css')
                  @include('layouts.datatables_css')
                @endsection

                {!! $dataTable->table(['width' => '100%', 'class' => 'table']) !!}

                @push('scripts')
                  @include('layouts.datatables_js')
                  {!! $dataTable->scripts() !!}
                    <script>
                        // //$(".table").find("thead").addClass('thead-dark');

                        (function ($, DataTable) {

                          // Datatable global configuration
                          $.extend(true, DataTable.defaults, {
                            "language": {
                              "url": "https://cdn.datatables.net/plug-ins/1.10.21/i18n/Spanish.json"
                            }
                          });

                        })(jQuery, jQuery.fn.dataTable);
                    </script>
                @endpush
              </div>
          </div>
      </div>
  </div>
</section>
@endsection








