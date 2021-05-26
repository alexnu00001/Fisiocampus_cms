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
                        <h4 class="card-title">Agrega un nuevo autor</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                        {!! Form::open(['route' => 'autors.store', 'class' =>'form-horizontal', 'novalidate', 'files'=>'true']) !!}
                        <div class="row">
                            @include('autors.fields')
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
