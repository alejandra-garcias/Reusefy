@extends('layouts.app')

@section('content')
<section class="login">
<div class="container">
    <a href="{{ url('/') }}"><img class='icono' src="x.png" alt=""></a>
    <div class="intro">
        <img class='logo' src="register.svg" alt="">
        <h1>Consigue los mejores precios</h1>
        <p>Y gana dinero con lo que no uses</p>
    </div>

        <form class="registro" method="POST" action="{{ route('register') }}">
        @csrf
        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Nombre">
        @error('name')
            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
        @enderror
        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email">

        @error('email')
            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
        @enderror
        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Contraseña">
        @error('password')
            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
        @enderror
        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirma tu contraseña">
        <div>
            <input type="checkbox" name="Agree" id="Agree">
            <label for="Agree"> {{ __('Estoy de acuerdo con terminos y condiciones') }}</label>
        </div>
        <button type="submit" class="btn-grad">{{ __('Register') }}</button>
        <p>¿Ya tienes cuenta?<a href="{{ route('login') }}">{{ __(' Inicia sesion') }}</a></p>

                    </form>

</div>
</section>
@endsection
