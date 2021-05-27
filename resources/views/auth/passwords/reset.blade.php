@extends('layouts.login')
@section('content')
<div class="auth-wrapper auth-v1 px-2">
    <div class="auth-inner py-2">
        <!-- Reset Password v1 -->
        <div class="card mb-0">
            <div class="card-body">
                <a href="javascript:void(0);" class="brand-logo">                  
                    <h2 class="brand-text text-primary ml-1">Fisiocampus</h2>
                </a>
                <h4 class="card-title mb-1">Restablecer Contraseña 🔒</h4>
                <p class="card-text mb-2">Su nueva contraseña debe ser diferente de las contraseñas utilizadas anteriormente</p>
                <form class="auth-reset-password-form mt-2" action="{{ route('password.update') }}" method="POST">
                    @csrf
                    <input type="hidden" name="token" value="{{ $token }}">

                    <div class="form-group">
                        <label for="email" class="form-label">Correo electrónico</label>                        
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus placeholder="nombre@ejemlplo.com">                        
                    </div>        
                    @error('email')                                                                
                        <h6 class="text-danger">{{ $message }}</h6>
                    @enderror 
                    <div class="form-group">
                        <div class="d-flex justify-content-between">
                            <label for="reset-password-new">Nueva Contraseña</label>
                        </div>
                        <div class="input-group input-group-merge form-password-toggle">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;">
                            <div class="input-group-append">
                                <span class="input-group-text cursor-pointer"><i data-feather="eye"></i></span>
                            </div>
                        </div>
                    </div>
                    @error('password')                                                                                      				 
                        <h6 class="text-danger">{{ $message }}</h6>
                    @enderror
                    <div class="form-group">
                        <div class="d-flex justify-content-between">
                            <label for="reset-password-confirm">Confirmación de contraseña</label>
                        </div>
                        <div class="input-group input-group-merge form-password-toggle">                            
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password"  placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;">
                            <div class="input-group-append">
                                <span class="input-group-text cursor-pointer"><i data-feather="eye"></i></span>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block" tabindex="3">Restaurar Contraseña</button>
                </form>

                <p class="text-center mt-2">
                    <a href="{{route('login')}}"> <i data-feather="chevron-left"></i> Regresar al login </a>
                </p>
            </div>
        </div>
        <!-- /Reset Password v1 -->
    </div>
</div>
@endsection 
@section('scripts')
    @parent 
@endsection