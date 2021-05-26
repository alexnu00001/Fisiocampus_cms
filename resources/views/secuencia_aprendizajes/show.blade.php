@extends('layouts.app')

@section('content')
  <section>
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header" style="padding-bottom: 1.5rem;">
            <h4 class="card-title">Secuencia Aprendizaje </h4>
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

                      @include('secuencia_aprendizajes.show_fields')

                      <div class="col-sm-12" style="text-align: center">
                      @if($secuenciaAprendizaje->getFirstMediaUrl('secuenciasAprendisajes_banner'))
                        <img src="{{$secuenciaAprendizaje->getFirstMediaUrl('secuenciasAprendisajes_banner')}}" style="max-width: 800px;" >
                      <h4>Banner</h4>
                      @endif

                    </div>

                    <div class="col-sm-12 row" style="margin-top: 30px; margin-bottom: 30px;">
                      
                    <div class="col-sm-4" style="text-align: center">

                      @if($secuenciaAprendizaje->getFirstMediaUrl('secuenciasAprendisajes_principal'))
                        <img src="{{$secuenciaAprendizaje->getFirstMediaUrl('secuenciasAprendisajes_principal')}}" style="max-width: 200px;" >
                      <h4>Imagen Principal</h4>
                      @endif

                    </div>
                    <div class="col-sm-4" style="text-align: center">

                      @if($secuenciaAprendizaje->getFirstMediaUrl('secuenciasAprendisajes_secundaria'))
                        <img src="{{$secuenciaAprendizaje->getFirstMediaUrl('secuenciasAprendisajes_secundaria')}}" style="max-width: 200px;" >
                      <h4>Imagen Secundaria</h4>
                      @endif

                    </div>
                    <div class="col-sm-4" style="text-align: center">

                      @if($secuenciaAprendizaje->getFirstMediaUrl('secuenciasAprendisajes_icono'))
                        <img src="{{$secuenciaAprendizaje->getFirstMediaUrl('secuenciasAprendisajes_icono')}}" style="max-width: 200px;" >
                      <h4>Icono</h4>
                      @endif
                    </div>
                  </div>

                      </tbody>
                    </table>

                    <a href="{{ route('secuenciaAprendizajes.index') }}" class="btn btn-outline-dark round mr-1 mb-1 waves-effect waves-light">Atrás</a>
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
