@extends('layouts.app')
@section('title', 'Editar')

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
            <h4 class="card-title">Editar Rol </h4>
            @include('adminlte-templates::common.errors')
          </div>
          <div class="card-content">
            <div class="card-body">

              {!! Form::model($role, ['route' => ['roles.update', $role->id], 'method' => 'patch','novalidate']) !!}
              <div class="row">
                @include('roles.fields')
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
