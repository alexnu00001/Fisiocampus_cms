@extends('layouts.app')

@section('title', 'Tipo de calificaciones')


@section('content')
    <div class="row" id="table-head">
      <div class="col-12">
        <div class="card">
          <div class="card-content">
            <div class="card-body">

              @include('flash::message')
            </div>
            <div class="table-responsive">
                 @include('tipo_calificacions.table')
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection

