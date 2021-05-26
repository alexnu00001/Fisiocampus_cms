@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Oferta Categoria
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($ofertaCategoria, ['route' => ['ofertaCategorias.update', $ofertaCategoria->id], 'method' => 'patch']) !!}

                        @include('oferta_categorias.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection