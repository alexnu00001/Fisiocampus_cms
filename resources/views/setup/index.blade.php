
@extends('layouts/contentLayoutMaster')

@section('title', 'Migración de contenido')

@section('vendor-style')
  <!-- vendor css files -->
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/charts/apexcharts.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/extensions/tether-theme-arrows.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/extensions/tether.min.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/extensions/shepherd-theme-default.css')) }}">
@endsection

@section('page-style')
  <!-- Page css files -->
@endsection

@section('content')
  <div class="container">
    @include('flash::message')
    <div class="row justify-content-center">

      <div class="col-md-4">
        <div class="card">
          <div class="card-header">Migracion de Profesores</div>

          <div class="card-body">
              {!! Form::open(['route' => 'migracionProfesores' ,'class'=>'form-horizontal','novalidate','files'=>'true']) !!}
            <div class="custom-file b-form-file" data-v-3bcd05f2="" id="__BVID__925__BV_file_outer_">
              <input type="file" class="custom-file-input" id="__BVID__925" style="z-index: -5;" name="file">
              <label data-browse="Browse" class="custom-file-label" for="__BVID__925">
                <span class="d-block form-file-text" style="pointer-events: none;">
                  Seleccione el archivo a dar de alta
                </span>
              </label>
            </div>
            <button type="submit" value="Cargar">Cargar</button>
              {!! Form::close() !!}
          </div>
        </div>
      </div>


      <div class="col-md-4">
        <div class="card">
          <div class="card-header">Migracion de Ofertas</div>

          <div class="card-body">
            {!! Form::open(['route' => 'migracion_1' ,'class'=>'form-horizontal','novalidate','files'=>'true']) !!}
            <div class="custom-file b-form-file" data-v-3bcd05f2="" id="__BVID__925__BV_file_outer_">
              <input type="file" class="custom-file-input" id="__BVID__925" style="z-index: -5;" name="file">
              <label data-browse="Browse" class="custom-file-label" for="__BVID__925">
                <span class="d-block form-file-text" style="pointer-events: none;">
                  Seleccione el archivo a dar de alta
                </span>
              </label>
            </div>
            <button type="submit" value="Cargar">Cargar</button>
            {!! Form::close() !!}
          </div>
        </div>
      </div>


      <div class="col-md-4">
        <div class="card">
          <div class="card-header">Migracion de Aulas</div>

          <div class="card-body">
            {!! Form::open(['route' => 'migracionAulas' ,'class'=>'form-horizontal','novalidate','files'=>'true']) !!}
            <div class="custom-file b-form-file" data-v-3bcd05f2="" id="__BVID__925__BV_file_outer_">
              <input type="file" class="custom-file-input" id="fileAulas" style="z-index: -5;" name="fileAulas">
              <label data-browse="Browse" class="custom-file-label" for="fileAulas">
                <span class="d-block form-file-text" style="pointer-events: none;">
                  Seleccione el archivo a dar de alta
                </span>
              </label>
            </div>
            <button type="submit" value="Cargar">Cargar</button>
            {!! Form::close() !!}
          </div>
        </div>
      </div>


      <div class="col-md-4">
        <div class="card">
          <div class="card-header">Migracion de Usuarios</div>

          <div class="card-body">
            {!! Form::open(['route' => 'migracionUsuarios' ,'class'=>'form-horizontal','novalidate','files'=>'true']) !!}
            <div class="custom-file b-form-file" data-v-3bcd05f2="" id="__BVID__925__BV_file_outer_">
              <input type="file" class="custom-file-input" id="fileUsuarios" style="z-index: -5;" name="fileUsuarios">
              <label data-browse="Browse" class="custom-file-label" for="fileUsuarios">
                <span class="d-block form-file-text" style="pointer-events: none;">
                  Seleccione el archivo a dar de alta
                </span>
              </label>
            </div>
            <button type="submit" value="Cargar">Cargar</button>
            {!! Form::close() !!}
          </div>
        </div>
      </div>



      <div class="col-md-4">
        <div class="card">
          <div class="card-header">Migracion de Categorias</div>

          <div class="card-body">
            {!! Form::open(['route' => 'migracionCategorias' ,'class'=>'form-horizontal','novalidate','files'=>'true']) !!}
            <div class="custom-file b-form-file" data-v-3bcd05f2="" id="__BVID__925__BV_file_outer_">
              <input type="file" class="custom-file-input" id="fileCategorias" style="z-index: -5;" name="fileCategorias">
              <label data-browse="Browse" class="custom-file-label" for="fileCategorias">
                <span class="d-block form-file-text" style="pointer-events: none;">
                  Seleccione el archivo a dar de alta
                </span>
              </label>
            </div>
            <button type="submit" value="Cargar">Cargar</button>
            {!! Form::close() !!}
          </div>
        </div>
      </div>


    </div>
  </div>
@endsection

@section('vendor-script')
  <!-- vendor files -->
  <script src="{{ asset(mix('vendors/js/charts/apexcharts.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/extensions/tether.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/extensions/shepherd.min.js')) }}"></script>
@endsection
@section('page-script')
  <!-- Page js files -->
  <script src="{{ asset(mix('js/scripts/pages/dashboard-analytics.js')) }}"></script>
@endsection

