@extends('layouts/fullLayoutMaster')

@section('title', 'Register Page')

@section('page-style')
{{-- Page Css files --}}
<link rel="stylesheet" href="{{ asset(mix('css/pages/authentication.css')) }}">
@endsection
@section('content')
  <section class="row flexbox-container">
    <div class="col-xl-12 col-12 d-flex justify-content-center">
      <div class="card bg-authentication rounded-0 mb-0">
        <div class="row m-0">

          <div class="col-lg-12 col-12 p-0">
            <div class="card rounded-0 mb-0 p-2">
              <div class="card-header pt-50 pb-1">
                <div class="card-title">
                  <h4 class="mb-0">Crear Nueva Cuenta</h4>
                </div>
              </div>
              <p class="px-2">Llene todos los campos.</p>
              <div class="card-content">
                <div class="card-body pt-0">
                  <form method="POST" action="{{ route('users.store') }}">
                    @csrf
                    <div class="form-label-group">
                      <!-- <input type="text" id="inputName" class="form-control" placeholder="Name" required> -->
                      <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Nombre" value="{{ old('name') }}" required autocomplete="name" autofocus>
                      <label for="name">Nombre del usuario</label>
                      @error('name')
                      <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                      @enderror
                    </div>
                    <div class="form-label-group">
                      <!-- <input type="email" id="inputEmail" class="form-control" placeholder="Email" required> -->
                      <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Email" value="{{ old('email') }}" required autocomplete="email">
                      <label for="email">Correo Electrónico</label>
                      @error('email')
                      <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                      @enderror
                    </div>
                    <div class="form-label-group">
                      <!-- <input type="password" id="inputPassword" class="form-control" placeholder="Password" required> -->
                      <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Contraseña" required autocomplete="new-password">
                      <label for="password">Password</label>
                      @error('password')
                      <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                      @enderror
                    </div>
                    <div class="form-label-group">
                      <!-- <input type="password" id="inputConfPassword" class="form-control" placeholder="Confirm Password" required> -->
                      <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirme contraseña" required autocomplete="new-password">
                      <label for="password-confirm">Confirm Password</label>
                    </div>

                    <div class="form-label-group">
                      <!-- <input type="password" id="inputConfPassword" class="form-control" placeholder="Confirm Password" required> -->
                      <select name="rol" id="rol" class="form-control" required>
                        <option value="">Rol</option>
                        @foreach($roles as $key => $rol)
                          <option value="{{$key}}">{{$rol}}</option>
                        @endforeach
                      </select>
                      <label for="password-confirm">Rol</label>
                    </div>

                    <button type="submit" class="btn btn-primary float-right btn-inline mb-50">Registrar Usuario</a>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
