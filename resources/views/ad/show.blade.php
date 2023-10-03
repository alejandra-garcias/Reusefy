<x-layout>
    <div class="show-container">
        <div class="picture-container">
            <img src="/workinprogress.png" alt="">
        </div>
        <div class="show-description">

            <h1>{{ $ad->title }}</h1>
            <p>{{ $ad->body }}</p>
            <p><a class="badge " href="{{route('category.ads',$ad->category)}}"> {{ $ad->category->name }}</a></p>
            <p><span class="badge ">{{ $ad->created_at->format('d/m/Y') }}</span>  </p>
            <small>{{$ad->user->name}}</small>



        </div>


    </div>
</x-layout>
