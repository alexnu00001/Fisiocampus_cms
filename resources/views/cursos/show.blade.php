@extends('layouts.app')

@section('content')
  <section>
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header" style="padding-bottom: 1.5rem;">
            <h4 class="card-title">Curso </h4>
            <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
            <div class="heading-elements">
              <ul class="list-inline mb-0">
                <li><a data-action="collapse" class=""><i class="feather icon-chevron-down"></i></a></li>
                <li><a data-action="expand"><i class="feather icon-maximize"></i></a></li>
                <li><a data-action="reload"><i class="feather icon-rotate-cw"></i></a></li>
                <li><a data-action="close"><i class="feather icon-x"></i></a></li>
              </ul>
            </div>
          </div>
          <div class="card-content collapse show" style="position: static; zoom: 1;">
            <div class="card-body">
              <div class="row">
                <div class="col-sm-12">
                  <div class="table-responsive">
                    <table class="table table-bordered">
                      <thead class="thead-dark">
                      <tr>
                        <th>Campo</th>
                        <th>Detalle</th>
                      </tr>
                      </thead>
                      <tbody>

                      @include('cursos.show_fields')
                      
                    <div class="col-sm-12" style="text-align: center">
                      @if($curso->getFirstMediaUrl('cursos_banner'))
                        <img src="{{$curso->getFirstMediaUrl('cursos_banner')}}" style="max-width: 800px;" >
                      <h4>Banner</h4>
                      @endif

                    </div>
                    <div class="col-sm-12 row" style="margin-top: 30px; margin-bottom: 30px;">
                      <div class="col-sm-4" style="text-align: center">

                        @if($curso->getFirstMediaUrl('cursos_principal'))
                          <img src="{{$curso->getFirstMediaUrl('cursos_principal')}}" style="max-width: 200px;" >
                        <h4>Imagen Principal</h4>
                        @endif

                      </div>
                      <div class="col-sm-4" style="text-align: center">

                        @if($curso->getFirstMediaUrl('cursos_secundaria'))
                          <img src="{{$curso->getFirstMediaUrl('cursos_secundaria')}}" style="max-width: 200px;" >
                        <h4>Imagen Secundaria</h4>
                        @endif

                      </div>
                      <div class="col-sm-4" style="text-align: center">

                        @if($curso->getFirstMediaUrl('cursos_icono'))
                          <img src="{{$curso->getFirstMediaUrl('cursos_icono')}}" style="max-width: 200px;" >
                        <h4>Icono</h4>
                        @endif
                      </div>

                    </div>

                      </tbody>
                    </table>

                    <a href="{{ route('cursos.index') }}" class="btn btn-outline-dark round mr-1 mb-1 waves-effect waves-light">Atrás</a>
                  </div>
                </div>
              </div>
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
  <script src="//cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/4.0.0/js/jasny-bootstrap.min.js"></script>
@endsection