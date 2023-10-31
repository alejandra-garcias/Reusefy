<section class="welcome">
    <div class="categories">
        <ul class="list">
            <li><a href="{{ route('category.ads', 'coches') }}"><img src="coche.svg" alt=""></a></li>
            <a>{{ __('Vehiculos') }}</a>
        </ul>

        <ul class="list">
            <li><a href="{{ route('category.ads', 'motos') }}"><img src="moto.svg" alt=""></a></li>
            <span>{{ __('Motocicletas') }}</span>
        </ul>

        <ul class="list">
            <li><a href="{{ route('category.ads', 'ordenadores') }}"><img src="ordenadores.svg" alt=""></a></li>
            <span>{{ __('Ordenadores') }}</span>
        </ul>

        <ul class="list">
            <li><a href="{{ route('category.ads', 'hogar') }}"><img src="hogar.svg" alt=""></a></li>
            <span>{{ __('Hogar') }}</span>
        </ul>

        <ul class="list">
            <li><a href="{{ route('category.ads', 'electronica') }}"><img src="electronica.svg" alt=""></a></li>

            <span>{{ __('Electronica') }}</span>
        </ul>
    </div>
</section>
