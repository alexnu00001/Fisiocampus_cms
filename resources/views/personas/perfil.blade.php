@extends('layouts.app')

@section('content')

<div class="container text-center py-1">
<img class="round" src="{{asset('images/portrait/small/avatar-s-11.jpg') }}" height="120" width="120" style="border-radius: 50%">
</div>

<div class="row my-1">
<section class="card-body text-center bg-white container col-md-6 offset-md-3" style="box-shadow: 5px 10px 18px #888888">

<h5 class="text-left">Acerca de</h5>

<div class="form-group text-left">
    <p>Fisiocampus-cms</p>
</div>

<!-- Nombre Field -->
<div class="form-group text-left">
    {!! Form::label('name', 'Nombre') !!}
    <p>{{ $persona->nombre }} {{$persona->apellido}}</p>
</div>

<!-- Inicio de cuenta Field -->
<div class="form-group text-left">
    {!! Form::label('creacion_profile', 'Unido desde') !!}
    <p>Febrero 27,2021</p>
</div>

<!-- Vivienda Field -->
<div class="form-group text-left">
    {!! Form::label('name', 'Vive en') !!}
    <p>Madrid</p>
</div>

<!-- Correo Field -->
<div class="form-group text-left">
    {!! Form::label('email', 'Correo') !!}
    <p>{{ $persona->email }}</p>
</div>

<div class="text-left">
<a href="https://www.facebook.com"><i class="fa fa-facebook-square"></i></a>
<a href="https://www.twitter.com"><i class="fa fa-twitter-square px-1"></i></a>
<a href="https://www.instagram.com"><i class="fa fa-instagram"></i></a>
</div>

</section>
</div>
@endsection
