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
                        @include('adminlte-templates::common.errors')
                        <div class="card-title">Editar autor</div>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            {!! Form::model($autor, ['route' => ['autors.update', $autor->id], 'method' => 'patch', 'files'=>'true']) !!}
                            
                            <div class="row">
                                @include('autors.fields')
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
