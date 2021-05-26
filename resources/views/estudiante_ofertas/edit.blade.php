@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Estudiante Oferta
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($estudianteOferta, ['route' => ['estudianteOfertas.update', $estudianteOferta->id], 'method' => 'patch']) !!}

                        @include('estudiante_ofertas.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection