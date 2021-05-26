@extends('layouts.app')

@section('content')
    <section>
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header" style="padding-bottom: 1.5rem;">
                        <h4 class="card-title">Articulo del blog</h4>
                    </div>
                    <div class="card-content collapse show" style="position: static; zoom: 1;">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-12">
                                    <a href="{{ route('articulos.index') }}" class="btn btn-outline-dark round mr-1 mb-1 waves-effect waves-light">Atrás</a>
                                    @include('articulos.show_fields')
                                    <a href="{{ route('articulos.index') }}" class="btn btn-outline-dark round mr-1 mb-1 waves-effect waves-light">Atrás</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Autor</h3>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-4">

                                    @foreach($articulo->autor->getMedia('autores') as $image)
                                        <img src="{{$image->getUrl()}}" alt="" width="100px;" height="100px;">
                                    @endforeach
                                </div>
                                <div class="col-sm">
                                    <h4>
                                        <a href="">{{$articulo->autor->nombre}}</a>
                                    </h4>
                                    <p>
                                        <b>{{$articulo->autor->titulo}}</b>
                                    </p>
                                    <p>{{$articulo->autor->descripcion_corta}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
