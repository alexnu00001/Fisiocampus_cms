@extends('layouts.app')

@section('title', 'Ofertas')

@section('content')
    <div class="row" id="table-head">
      <div class="col-12">
        <div class="card">
          <div class="card-content">
            <div class="card-body">

              @include('flash::message')
            </div>
            <div class="row" >
              <div class="col-10 offset-1">
                <div class="table-responsive">
                    @section('css')
    @include('layouts.datatables_css')
@endsection

{!! $dataTable->table(['width' => '100%', 'class' => 'table table-striped table-bordered']) !!}

@push('scripts')
    @include('layouts.datatables_js')
    {!! $dataTable->scripts() !!}
    <script>
          $(".table").find("thead").addClass('thead-dark');

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
        </div>
      </div>
    </div>
@endsection

