@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Logros
        </h1>
    </section>
        <div class="box box-primary">
            <div class="box-body">
                    @include('logros.show_fields')
                    <a href="{{ route('logros.index') }}" class="btn btn-primary pull-right">Regresar</a>
            </div>
        </div>
@endsection
