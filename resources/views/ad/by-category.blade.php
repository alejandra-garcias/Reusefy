<x-layout>
    {{$ads->links()}}
    <div class="container-welcome">
    @forelse ($ads as $ad)
        <div class="ads ">
            <h5>{{ $ad->title }}</h5>
            <h6 class="badge">{{ $ad->price }} €</h6>

                <div><a
                            href="{{ route('category.ads', $ad->category) }}">{{ $ad->category->name }}</a>
                </div>

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
</x-layout>
