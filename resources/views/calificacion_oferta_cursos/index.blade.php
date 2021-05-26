@extends('layouts.app')

@section('title', 'Calificaciones de las Ofertas/Cursos')

@section('content')

    <div class="row" id="table-head">
      <div class="col-12">
        <div class="card">
          <div class="card-content">
            <div class="card-body">

              @include('flash::message')
            </div>
            <div class="table-responsive">
                
                 @include('calificacion_oferta_cursos.table')
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection
