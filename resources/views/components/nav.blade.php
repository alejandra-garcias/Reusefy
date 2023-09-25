<header>
    <a href="#"><img src="{{ asset('logo-texto.png') }}" class='logo-texto'></a>
    <a href="#"><img src="{{ asset('logo.png') }}" class='logo'></a>
    <form class="d-flex" role="search">
        <input class="form-control me-1 search-box" type="search" placeholder="Buscar en todas las categorías..." aria-label="Search">
    </form>
    <nav>
    <div class="nav-list">

@guest
    @if (Route::has('login'))
        <button class="boton-blanco"><a href="{{ route('login') }}">{{ __('Regístrate o Inicia sesión') }}</a></button>
    @elseif (Route::has('register'))
        <button class="boton-blanco"><a href="{{ route('register') }}">{{ __('Regístrate o Inicia sesión') }}</a></button>
    @endif

@else
    <li class="boton-blanco"><form id="logoutForm" action="{{ route('logout') }}" method='POST'>
    @csrf
    </form><a class="logout" id='logoutBtn'>Cerrar Sesion </a> </li>
    <button class="boton-verde"><a href="{{ route('ads.create') }}">{{ __('Subir artículo') }}</a></button>

@endguest


    </div>
    </nav>
</header>

<div class="nav-bottom">
    <ul class="nav-bottom-list">
        @guest
    @if (Route::has('login'))
        <button class="boton-blanco"><a href="{{ route('login') }}">{{ __('Regístrate o Inicia sesión') }}</a></button>
    @elseif (Route::has('register'))
        <button class="boton-blanco"><a href="{{ route('register') }}">{{ __('Regístrate o Inicia sesión') }}</a></button>
    @endif

@else
    <li class="boton-blanco"><form id="logoutForm" action="{{ route('logout') }}" method='POST'>
    @csrf
    </form><a class="logout" id='logoutBtn'>Cerrar Sesion </a> </li>
    <button class="boton-verde"><a href="{{ route('ads.create') }}">{{ __('Subir artículo') }}</a></button>

@endguest
    </ul>
</div>

