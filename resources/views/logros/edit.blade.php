@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Logro
        </h1>
   </section>

       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">

                   {!! Form::model($logro, ['route' => ['logros.update', $logro->id], 'method' => 'patch']) !!}

                        @include('logros.fields')

                   {!! Form::close() !!}

           </div>
       </div>

@endsection