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
                            {!! Form::model($articulo, ['route' => ['articulos.update', $articulo->id], 'method' => 'patch', 'files'=>'true']) !!}
                            
                            <div class="row">
                                @include('articulos.fields')
                            </div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection