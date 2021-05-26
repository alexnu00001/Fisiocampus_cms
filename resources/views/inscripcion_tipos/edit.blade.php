@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Inscripcion Tipo
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($inscripcionTipo, ['route' => ['inscripcionTipos.update', $inscripcionTipo->id], 'method' => 'patch']) !!}

                        @include('inscripcion_tipos.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection