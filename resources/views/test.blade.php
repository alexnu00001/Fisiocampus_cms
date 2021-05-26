@extends('layouts.login')
@section('content')
<div class="auth-wrapper auth-v1 px-2">
    <div class="auth-inner py-2">
        <!-- Login v1 -->
        <div class="card mb-0">
            <div class="card-body">
                <a href="javascript:void(0);" class="brand-logo">
                    {{-- <img src="{{asset('img/logos/logo_v2.png')}}" alt="Girl in a jacket" width="30" height="42"> --}}
                    <h2 class="brand-text text-primary ml-1">Fisicampus</h2>
                </a> 

                <h4 class="card-title mb-1 text-center">Bienvenido a Fisiocampus!</h4>
                <div class="card-title mb-1 text-center">
                    <img src="{{asset('img/icons/lock.png')}}" alt="Girl in a jacket" width="60" height="60">
                </div>
                {{-- <p class="card-text mb-2 text-center">CMS</p> --}}
                <form class="auth-login-form mt-2" method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group">
                        <label for="email" class="form-label @error('email') is-invalid @enderror">Correo electrónico</label>
                        <input type="text" class="form-control" id="email" name="email" placeholder="nombre@ejemlplo.com" aria-describedby="email" tabindex="1" autofocus value="{{ old('email') }}" autocomplete="email"/>
                    </div>                    
                    <div class="form-group">
                        <div class="d-flex justify-content-between">
                            <label for="login-password">Contraseña</label>                            
                        </div>
                        <div class="input-group input-group-merge form-password-toggle">
                            <input type="password" class="form-control form-control-merge" id="password" name="password" tabindex="2" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="password" autocomplete="current-password"/>
                            <div class="input-group-append">
                                <span class="input-group-text cursor-pointer"><i data-feather="eye"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" id="remember-me" tabindex="3" {{ old('remember') ? 'checked' : '' }}/>
                            <label class="custom-control-label" for="remember-me"> Recordar </label>
                        </div>
                    </div>
                    @if (Route::has('password.request'))
                        <p class="text-center mt-2">                        
                            <a href="{{ route('password.request') }}">
                                <span>¿Olvido su contraseña?</span>
                            </a>
                        </p>
                    @endif
                    <button type="sumbit" class="btn btn-primary btn-block" tabindex="4">Acceder</button>
                </form>
                <p class="text-center mt-2">
                    <span>¿Eres nuevo?</span>
                    <a href="register">
                        <span>Crea una cuenta</span>
                    </a>
                </p>
                <div class="divider my-2">
                    <div class="divider-text">O</div>
                </div>
                <div class="auth-footer-btn d-flex justify-content-center">
                    <a href="javascript:void(0)" class="btn btn-facebook">
                        <i data-feather="facebook"></i>
                    </a>
                    <a href="javascript:void(0)" class="btn btn-twitter white">
                        <i data-feather="twitter"></i>
                    </a>
                    <a href="javascript:void(0)" class="btn btn-google">
                        <i data-feather="mail"></i>
                    </a>
                    <a href="javascript:void(0)" class="btn btn-github">
                        <i data-feather="github"></i>
                    </a>
                </div>
            </div>
        </div>
        <!-- /Login v1 -->
    </div>
</div>
    
@endsection 