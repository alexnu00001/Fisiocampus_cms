@extends('layouts.app')

@section('content')
  <section>
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header" style="padding-bottom: 1.5rem;">
            <h3 class="card-title">Oferta </h3>
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

                  @if($oferta->getFirstMediaUrl('ofertas_banner'))
                    <img src="{{$oferta->getFirstMediaUrl('ofertas_banner')}}" style="max-width: 800px;"  alt="{{$oferta->alt_banner != null ? $oferta->alt_banner : 'sin datos'}}" title="{{$oferta->title_banner != null ? $oferta->title_banner : 'sin datos'}}">
                  <h4>Banner</h4>
                  @endif

                </div>
                <div class="col-sm-4">

                  @if($oferta->getFirstMediaUrl('ofertas_principal'))
                    <img src="{{$oferta->getFirstMediaUrl('ofertas_principal')}}" style="max-width: 200px;"  alt="{{$oferta->alt_img_princ != null ? $oferta->alt_img_princ : 'sin datos'}}" title="{{$oferta->title_img_princ!= null ? $oferta->title_img_princ : 'sin datos'}}">
                  <h4>Imagen Principal</h4>
                  @endif

                </div>
                <div class="col-sm-4">

                  @if($oferta->getFirstMediaUrl('ofertas_secundaria'))
                    <img src="{{$oferta->getFirstMediaUrl('ofertas_secundaria')}}" style="max-width: 200px;" alt="{{$oferta->alt_img_sec != null ? $oferta->alt_img_sec : 'sin datos'}}" title="{{$oferta->title_img_sec != null ? $oferta->title_img_sec : 'sin datos'}}">
                  <h4>Imagen Secundaria</h4>
                  @endif

                </div>
                <div class="col-sm-4">

                  @if($oferta->getFirstMediaUrl('ofertas_icono'))
                    <img src="{{$oferta->getFirstMediaUrl('ofertas_icono')}}" style="max-width: 200px;" alt="{{$oferta->alt_icono != null ? $oferta->alt_icono : 'sin datos'}}" title="{{$oferta->title_icono != null ? $oferta->title_icono : 'sin datos'}}">
                  <h4>Icono</h4>
                  @endif

                </div>

                <div class="col-sm-12">
                  <br /><br /><br />
                  <div class="table-responsive">
                    <table class="table table-bordered table-hover-animation">
                      <thead class="thead-dark">
                      <tr>
                        <th>Campo</th>
                        <th>Detalle</th>
                      </tr>
                      </thead>
                      <tbody>

                      @include('ofertas.show_fields')
                      </tbody>
                    </table>

                    <a href="{{ route('ofertas.index') }}" class="btn btn-outline-dark round mr-1 mb-1 waves-effect waves-light">Atrás</a>
                    <a href="{{ route('ofertas.edit',$oferta->id) }}" class="btn btn-primary round mr-1 mb-1 waves-effect waves-light">Editar</a>
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
