@extends('layouts.app')
@section('title', 'Crear')
@section('page-style')
  {{-- Page Css files --}}
  <link rel="stylesheet" href="{{ asset(mix('css/plugins/forms/validation/form-validation.css')) }}">

@endsection
@section('content')
  <section>
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
           @include('adminlte-templates::common.errors')
            <h4 class="card-title">Crear nueva Oferta</h4>
          </div>
          <div class="card-content">
            <div class="card-body">

              {!! Form::open(['route' => 'ofertas.store' ,'class'=>'form-horizontal','novalidate', 'files' => 'true']) !!}
              <div class="row">
                @include('ofertas.fields')
              </div>
              {!! Form::close() !!}

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection

@section('page-style')
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/4.0.0/css/jasny-bootstrap.min.css">
  <style type="text/css">
    .fileinput-preview img{
      max-width: 200px !important;
      background-color: red;
    }
  </style>
@endsection

@section('vendor-script')
  <!-- vendor files -->
  <script src="{{ asset(mix('vendors/js/forms/validation/jqBootstrapValidation.js')) }}"></script>

  <script src="//cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/4.0.0/js/jasny-bootstrap.min.js"></script>
@endsection
@section('page-script')
  <!-- Page js files -->
  <script src="{{ asset(mix('js/scripts/forms/validation/form-validation.js')) }}"></script>
@endsection
