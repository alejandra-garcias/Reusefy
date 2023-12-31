
<div class="nav1">
    <ul class="nav-language">
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
    <div class="nav-logo">
        <a href="{{ url('/') }}"><img src="{{ asset('reusefy.svg') }}" class='navbar-brand logo-texto '></a>
    </div>
        <form class="nav-form" role="search" action="{{route('search')}}" method="GET" >
            <input class="form-control me-2 search-box" type="search" placeholder="Buscar en todas las categorias" aria-label="Search" name="q">
            <button class="btn btn-outline-success btn-grad" type="submit">{{__("Buscar")}}</button>
          </form>
</div>
<ul class="nav-elements">
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            {{__("Categorías")}}
        </a>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item gradiant-text" href="{{ route('category.ads', 'coches') }}">{{__("Coches")}}</a></li>
          <li><a class="dropdown-item gradiant-text" href="{{ route('category.ads', 'motos') }}">{{__("Motocicletas")}}</a></li>
          <li><a class="dropdown-item gradiant-text" href="{{ route('category.ads', 'ordenadores') }}">{{__("Ordenadores")}}</a></li>
          <li><a class="dropdown-item gradiant-text" href="{{ route('category.ads', 'hogar') }}">{{__("Hogar")}}</a></li>
          <li><a class="dropdown-item gradiant-text" href="{{ route('category.ads', 'electronica') }}">{{__("Electrónica")}}</a></li>

        </ul>
      </li>
      <li class="nav-item dropdown">
        @guest
        @if (Route::has('login'))
        <a class="gradiant-text"
            href="{{ route('login') }}">{{ __('Regístrate o Inicia sesión') }}</a>
        @elseif (Route::has('register'))
        <button class="btn btn-grad"><a
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
        <a class="gradiant-text" style="cursor: pointer" id='logoutBtn'>{{__( "Cerrar Sesion")}}</a>
    </form>
    </ul>
    <li class="nav-item">
        <a class="nav-link active gradiant-text" aria-current="page"
            href="{{ route('ads.create') }}">{{ __('Subir artículo') }}</a>
    </li>

        @endguest


</ul>
