
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a href="{{ url('/') }}"><img src="{{ asset('logo.png') }}" class='navbar-brand logo-texto '></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                {{__("Categorías")}}
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="{{ route('category.ads', 'coches') }}">{{__("Coches")}}</a></li>
              <li><a class="dropdown-item" href="{{ route('category.ads', 'motos') }}">{{__("Motocicletas")}}</a></li>
              <li><a class="dropdown-item" href="{{ route('category.ads', 'ordenadores') }}">{{__("Ordenadores")}}</a></li>
              <li><a class="dropdown-item" href="{{ route('category.ads', 'hogar') }}">{{__("Hogar")}}</a></li>
              <li><a class="dropdown-item" href="{{ route('category.ads', 'electronica') }}">{{__("Electrónica")}}</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            @guest
            @if (Route::has('login'))
            <button class="btn btn-green"><a
                href="{{ route('login') }}">{{ __('Regístrate o Inicia sesión') }}</a></button>
            @elseif (Route::has('register'))
            <button class="btn btn-green"><a
                href="{{ route('register') }}">{{ __('Regístrate o Inicia sesión') }}</a></button>
            @endif
          </li>
        @else
        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            {{ Auth::user()->name }}
        </a>
        <ul class="dropdown-menu">
            @if (Auth::user()->is_revisor)
          <li><a class="dropdown-item" href="{{ route('revisor.home') }}">Revisor <span class="badge rounded-pill bg-danger">
            {{\App\Models\Ad::ToBeRevisionedCount() }}
        </span> </a></li> @endif
        <hr class="dropdown-divider">
        <form  id="logoutForm" action="{{ route('logout') }}" method='POST'>
            @csrf
            <a id='logoutBtn'>{{__( "Cerrar Sesion")}}</a>
        </form>
        </ul>
        <li class="nav-item">
            <a class="nav-link active" aria-current="page"
                href="{{ route('ads.create') }}">{{ __('Subir artículo') }}</a>
        </li>

            @endguest


            <li class="nav-item">
                <x-local lang="en" country='gb'/>
            </li>
            <li class="nav-item">
                <x-local lang="es" country='es'/>
            </li>
            <li class="nav-item">
                <x-local lang="it" country='it'/>
            </li>
        </ul>
        <form class="d-flex" role="search" action="{{route('search')}}" method="GET" >
          <input class="form-control me-2 search-box" type="search" placeholder="Search" aria-label="Search" name="q">
          <button class="btn btn-outline-success btn-green" type="submit">{{__("Buscar")}}</button>
        </form>
      </div>
    </div>
  </nav>
