@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Tipo Calificacion
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($tipoCalificacion, ['route' => ['tipoCalificacions.update', $tipoCalificacion->id], 'method' => 'patch']) !!}

                        @include('tipo_calificacions.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection