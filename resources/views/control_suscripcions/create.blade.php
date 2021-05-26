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
            <h4 class="card-title">Agregar nuevo Plan</h4>
          </div>
          <div class="card-content">
            <div class="card-body">

              {!! Form::open(['route' => 'controlSuscripcions.store' ,'class'=>'form-horizontal','novalidate','files'=>'true']) !!}
              <div class="row">
                @include('control_suscripcions.fields')
              </div>
              {!! Form::close() !!}

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
@section('page-script')
  <!-- Page js files -->
  <script src="{{ asset(mix('js/scripts/forms/validation/form-validation.js')) }}"></script>
  <script src="/vendors/ckeditor/ckeditor.js"></script>

  <script type="text/javascript">
    CKEDITOR.replace( 'descripcion' );
  </script>
@endsection
