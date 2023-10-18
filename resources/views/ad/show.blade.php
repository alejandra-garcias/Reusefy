<x-layout>
    <div class="show-container">
        <div class="picture-container">

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
                                <img src="{{ Storage::url($image->path) }}" class="d-block w-100" alt="">

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

                        <span class="carousel-control-next—icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>


        </div>
    </div>
    <div class="show-description">

        <h1>{{ $ad->title }}</h1>
        <p>{{ $ad->body }}</p>
        <p>{{ $ad->price }}</p>
        <p><a class="badge " href="{{ route('category.ads', $ad->category) }}"> {{ $ad->category->name }}</a></p>
        <p><span class="badge ">{{ $ad->created_at->format('d/m/Y') }}</span> </p>
        <small>{{ $ad->user->name }}</small>



    </div>


    </div>
</x-layout>
