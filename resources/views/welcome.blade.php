<x-layout>
    <section class="welcome">
        <div class="intro">
            <h1>Compra y vende artículos de segunda mano</h1>
            <p> con comodidad desde tu propio sillón.</p>
        </div>
        <ul class="categories">
            <li><a href="{{ route('category.ads', 'coches') }}"><img src="coche.svg" alt=""></a></li>
            <li><a href="{{ route('category.ads', 'motos') }}"><img src="moto.svg" alt=""></a></li>
            <li><a href="{{ route('category.ads', 'moviles') }}"><img src="moviles.svg" alt=""></a></li>
            <li><a href="{{ route('category.ads', 'ordenadores') }}"><img src="ordenadores.svg" alt=""></a></li>
            <li><a href="{{ route('category.ads', 'hogar') }}"><img src="hogar.svg" alt=""></a></li>
            <li><a href="{{ route('category.ads', 'electronica') }}"><img src="electronica.svg" alt=""></a></li>
        </ul>
        <div class="container-welcome">
            @forelse ($ads as $ad)
                <div class="ads" >
                    <h5>{{ $ad->title }}</h5>
                    <h6 class="badge">{{ $ad->price }} €</h6>
                    @if ($ad->category)
                        <div><a
                                    href="{{ route('category.ads', $ad->category) }}">#{{ $ad->category->name }}</a>
                        </div>
                    @endif
                    <i>{{ $ad->created_at->format('d/m/Y') }}</i>
                    <p>{{ $ad->user->name }}</p>
                    <a href="{{route('ads.show',$ad)}}">Ver</a>
                </div>
            @empty
                <h2>Ups...parece que aún no hay nada por aquí</h2>
                <a href="{{ route('ads.create') }}">Publica tu primer anuncio</a> o <a href="{{ route('home') }}">Vuelve
                    al inicio</a>
            @endforelse
        </div>
    </section>


</x-layout>
