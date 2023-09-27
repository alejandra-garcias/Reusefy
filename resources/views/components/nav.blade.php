<header>
    <a href="{{ url('/') }}"><img src="{{ asset('logo-texto.png') }}" class='logo-texto'></a>
    <a href="{{ url('/') }}"><img src="{{ asset('logo.png') }}" class='logo'></a>
    <form role="search">
        <input class="form-control  search-box" type="search" placeholder="   Buscar en todas las categorías..."
            aria-label="Search">
    </form>
    <nav>
        <div class="nav-list">

            @guest
                @if (Route::has('login'))
                    <button class="btn btn-green"><a
                            href="{{ route('login') }}">{{ __('Regístrate o Inicia sesión') }}</a></button>
                @elseif (Route::has('register'))
                    <button class="btn btn-green"><a
                            href="{{ route('register') }}">{{ __('Regístrate o Inicia sesión') }}</a></button>
                @endif
            @else
                <button class="btn btn-white">
                    <form id="logoutForm" action="{{ route('logout') }}" method='POST'>
                        @csrf
                        <a id='logoutBtn'>Cerrar Sesion</a>
                    </form>
                </button>

                <button class="btn btn-green"><a href="{{ route('ads.create') }}">{{ __('Subir artículo') }}</a></button>

            @endguest


        </div>
    </nav>



</header>
<!--Nav responsive-->

<div class=bottom>
    @guest
    @if (Route::has('login'))
        <button class="btn btn-green"><a
                href="{{ route('login') }}">{{ __('Regístrate o Inicia sesión') }}</a></button>
    @elseif (Route::has('register'))
        <button class="btn btn-green"><a
                href="{{ route('register') }}">{{ __('Regístrate o Inicia sesión') }}</a></button>
    @endif
@else
    <button class="btn btn-white">
        <form id="logoutForm" action="{{ route('logout') }}" method='POST'>
            @csrf
            <a id='logoutBtn'>Cerrar Sesion</a>
        </form>
    </button>

    <button class="btn btn-green"><a href="{{ route('ads.create') }}">{{ __('Subir artículo') }}</a></button>

@endguest
</div>
