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
            <h4 class="card-title">Crear nuevo Tipo Pago</h4>
          </div>
          <div class="card-content">
            <div class="card-body">

              {!! Form::open(['route' => 'tipoPagos.store' ,'class'=>'form-horizontal','novalidate']) !!}
              <div class="row">
                @include('tipo_pagos.fields')
              </div>
              {!! Form::close() !!}

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection



@section('vendor-script')
  <!-- vendor files -->
  <script src="{{ asset(mix('vendors/js/forms/validation/jqBootstrapValidation.js')) }}"></script>
@endsection
@section('page-script')
  <!-- Page js files -->
  <script src="{{ asset(mix('js/scripts/forms/validation/form-validation.js')) }}"></script>
@endsection
