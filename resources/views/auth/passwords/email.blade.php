@extends('layouts.login')
@section('content')
<div class="auth-wrapper auth-v1 px-2">
  <div class="auth-inner py-2">
      <!-- Forgot Password v1 -->
      <div class="card mb-0">
          <div class="card-body">
              <a href="javascript:void(0);" class="brand-logo">                  
                  <h2 class="brand-text text-primary ml-1">Fisiocampus</h2>
              </a>
              @if (session('status'))                   
                  <div class="alert alert-success" role="alert">
                      <h4 class="alert-heading">Exito!</h4>
                      <div class="alert-body">
                        {{ session('status') }}
                      </div>
                  </div>
              @endif
              <h4 class="card-title mb-1">¿Olvido su contraseña? 🔒</h4>
              <p class="card-text mb-2">Ingrese su correo electrónico y le enviaremos instrucciones para restablecer su contraseña</p>

              <form class="auth-forgot-password-form mt-2" action="{{ route('password.email') }}" method="POST"">
                @csrf
                  <div class="form-group">
                      <label for="email" class="form-label">Correo electrónico</label>
                      <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="nombre@ejemlplo.com" aria-describedby="email" tabindex="1" autofocus value="{{ old('email') }}" autocomplete="email" required/>
                  </div>
                  @error('email')                                                                
                      <h6 class="text-danger">{{ $message }}</h6>
                  @enderror  
                  <button type="submit" class="btn btn-primary btn-block" tabindex="2">Restablecer</button>
              </form>

              <p class="text-center mt-2">
                  <a href="{{route('login')}}"> <i data-feather="chevron-left"></i> Regresar al login </a>
              </p>
          </div>
      </div>
      <!-- /Forgot Password v1 -->
  </div>
</div>
@endsection 
@section('scripts')
    @parent 
@endsection