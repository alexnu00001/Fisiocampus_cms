@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Calificacion Oferta Curso
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($calificacionOfertaCurso, ['route' => ['calificacionOfertaCursos.update', $calificacionOfertaCurso->id], 'method' => 'patch']) !!}

                        @include('calificacion_oferta_cursos.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection