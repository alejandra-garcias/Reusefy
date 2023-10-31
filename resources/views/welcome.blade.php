<x-layout>
    <section class="welcome">
        <div class="intro">
            <h1>{{ __('messages.welcomeReusefy') }} <span class="gradiant-text">Reusefy</span></h1>
            <h2>{{ __('messages.welcome') }}</h2>
            <p> {{ __('messages.welcome.p') }}</p>
        </div>

        <x-icons />

        <div class="anuncios">
            @forelse ($ads as $ad)
                <div class="item">
                    <a class="tarjeta-a" href="{{ route('ads.show', $ad) }}"></a>
                    @if ($ad->images()->count() > 0)
                        <img src="{{ $ad->images()->first()->getUrl(400, 300) }}" class="card-img-top tarjeta-img"
                            alt="...">
                    @else
                        <img src="https://via.placeholder.com/150" class="card-img-top tarjeta-img" alt="...">
                    @endif
                    <div class="item__overlay">
                        <h5 class="gradiant-text tarjeta-h5" id="person1" aria-hidden="true">{{ $ad->title }} -
                            <span>
                                @if ($ad->price == intval($ad->price))
                                    {{ intval($ad->price) }} €
                                @else
                                    {{ number_format($ad->price, 2) }} €
                                @endif
                            </span></h5>
                        <div class="item__body">


                            @if ($ad->category->name == 'coches')
                                <img src="{{ asset('coche.svg') }}"style="width: 2.5rem; height:2rem">
                            @elseif ($ad->category->name == 'motos')
                                <img src="{{ asset('moto.svg') }}"style="width: 2.5rem; height:2rem">
                            @elseif ($ad->category->name == 'hogar')
                                <img src="{{ asset('hogar.svg') }}"style="width: 2.5rem; height:2rem">
                            @elseif ($ad->category->name == 'electronica')
                                <img src="{{ asset('electronica.svg') }}"style="width: 2.5rem; height:2rem">
                            @elseif ($ad->category->name == 'ordenadores')
                                <img src="{{ asset('ordenadores.svg') }}"style="width: 2.5rem; height:2rem">
                            @endif
                            <p class="truncate">{{ $ad->body }}</p>
                        </div>
                    </div>
                </div>
            @empty
                <h2>{{ __('Ups...parece que aún no hay nada por aquí') }}</h2>
                <a href="{{ route('ads.create') }}">{{ __('Publica tu primer anuncio') }}</a> o <a
                    href="{{ route('home') }}">{{ __('Vuelve a la home') }}</a>
            @endforelse


        </div>

    </section>


</x-layout>
