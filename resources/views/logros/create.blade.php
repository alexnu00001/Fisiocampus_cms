@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Logros
        </h1>
    </section>
    <div class="card">
            @include('adminlte-templates::common.errors')
            <div class="box box-primary">
                <div class="box-body">
                    {!! Form::open(['route' => 'logros.store', 'files'=>'true']) !!}
                        @include('logros.fields')
                    {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
