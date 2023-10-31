<x-layout>
    <div class="showw-container">
        <x-banner/>
        <div class="show-tarjeta">
            <div class="show-top">
                <div class="show-user">
                    <img src="{{ asset('user.svg') }}" class="logo-texto" alt="">
                    <small>{{ $ad->user->name }}</small>
                </div>
                <div class="show-category">
                    <a style="color: grey" href="{{ route('category.ads', $ad->category) }}">
                        {{ $ad->category->name }}</a>
                </div>
                <div class="show-price">
                    @if ($ad->price == intval($ad->price))
                        {{ intval($ad->price) }} €
                    @else
                        {{ number_format($ad->price, 2) }} €

                        <span class="show-badge">{{ $ad->price }} €</span>
                    @endif
                    <span class="show-badge ">{{ $ad->created_at->format('d/m/Y') }}</span>
                </div>
            </div>

                <div id="adImages" class="carousel slide" data-bs-ride="true">
                    <div class="carousel-indicators">
                        @for ($i = 0; $i < $ad->images()->count(); $i++)
                            <button type="button" data-bs-target="#adImages" data-bs-slide-to="{{ $i }}"
                                class="@if ($i == 0) active @endif" aria-current="true"
                                aria-label="Slide{{ $i + 1 }}"></button>
                        @endfor
                    </div>

                    <div class="carousel-inner">
                        @foreach ($ad->images as $image)
                            <div class="carousel-item @if ($loop->first) active @endif">
                                <img src="{{ $image->getUrl(400, 300) }}" class="d-block w-100" alt="">
                            </div>
                        @endforeach
                    </div>

                    <button class="carousel-control-prev" type="button" data-bs-target="#adImages"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>

                    <button class="carousel-control-next" type="button" data-bs-target="#adImages"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>

           
            <div class="show-description">
                <h1>{{ $ad->title }}</h1>
                <p>{{ $ad->body }}</p>

            </div>
        </div>
        <x-banner-2/>
    </div>
</x-layout>
