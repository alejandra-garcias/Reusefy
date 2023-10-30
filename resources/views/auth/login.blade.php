@extends('layouts.app')

@section('content')
    <section class="login">
        <div class="container">
            <a href="{{ url('/') }}"><img class='icono' src="x.png" alt=""></a>
            <div class="intro">
                <img class='logo' src="logeo.svg" alt="">
                <h1>Te damos la bienvenida</h1>
                <p>Nos alegra verte de nuevo por aqui</p>
            </div>


            <form class="registro" method="POST" action="{{ route('login') }}">
                @csrf
                <input id="email" type="email" @error('email') is-invalid @enderror"
                    name="email"value="{{ old('email') }}" required autocomplete="email" autofocus
                    placeholder="Correo Electronico">
                @error('email')
                    <span role="alert"><strong>{{ $message }}</strong></span>
                @enderror
                <input id="password" type="password" @error('password') is-invalid @enderror" name="password" required
                    autocomplete="current-password" placeholder="Contraseña">
                @error('password')
                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                @enderror
                <div>
                    <input type="checkbox" name="remember" id="remember"{{ old('remember') ? 'checked' : '' }}>
                    <label for="remember"> {{ __('Recuerdame') }}</label>
                </div>

                <button type="submit" class="btn-grad">{{ __('Login') }}</button>
                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}">{{ __('Has olvidado tu contraseña?') }}</a>
                @endif
                <p>¿No tienes cuenta?<a href="{{ route('register') }}">{{ __(' Registrate') }}</a></p>
            </form>

        </div>
    </section>
@endsection
