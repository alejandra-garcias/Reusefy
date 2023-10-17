<x-layout>
    <section class="welcome">
        <div class="intro">
            <h1>Compra y vende artículos de segunda mano</h1>
            <p> con comodidad desde tu propio sillón.</p>
        </div>


        <div class="anuncios">
            @forelse ($ads as $ad)
                <div class="card" style="width: 18rem;">
                    @if ($ad->images()->count() > 0)
                        <!-- <img src="{{ !$ad->images()->get()->isEmpty()? Storage::url($ad->images()->first()->path): 'https://via.placeholder.com/150' }}" class="card-img-top" alt="...">-->

                        <img src="{{ Storage::url($ad->images()->first()->path) }}" class="card-img-top" alt="...">
                    @else
                        <img src="https://via.placeholder.com/150" class="card-img-top" alt="...">
                    @endif
                    <div class="card-body">
                        <h5 class="card-title">{{ $ad->title }}</h5>
                        <p class="card-text text-truncate">{{ $ad->description }}</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">{{ $ad->price }} € </li>
                        @if ($ad->category)
                            <li class="list-group-item"><a
                                    href="{{ route('category.ads', $ad->category) }}">#{{ $ad->category->name }}</a>
                            </li>
                        @endif
                        <li class="list-group-item">{{ $ad->user->name }} - {{ $ad->created_at->format('d/m/Y') }}</li>
                    </ul>
                    <div class="card-body">
                        <a href="{{ route('ads.show', $ad) }}" class="card-link">Ver</a>
                        <a href="#" class="card-link">Another link</a>
                    </div>
                </div>
            @empty
                <h2>Ups...parece que aún no hay nada por aquí</h2>
                <a href="{{ route('ads.create') }}">Publica tu primer anuncio</a> o <a
                    href="{{ route('home') }}">Vuelve
                    al inicio</a>
            @endforelse


        </div>
    </section>


</x-layout>
