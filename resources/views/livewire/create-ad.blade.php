
<div >

    @if (session()->has('message'))
        <div role="alert">
            {{session('message')}}
        </div>
    @endif

    <form wire:submit.prevent='store'>
        @csrf
        <div>
            <label for="title">Titulo:</label>
            <input wire:model="title" type="text"  @error('title') is-invalid @enderror">
            @error('title')
                {{$message}}
            @enderror
        </div>
        <div>
            <label for="price">Precio:</label>
            <input wire:model="price" type="text" @error('price') is-invalid @enderror">
            @error('price')
                {{$message}}
            @enderror>
        </div>
        <div>
            <label for="category">Category:</label>
            <select wire:model.defer="category">
            <option value=''>Selecciona una categoria</option>
            @foreach ($categories as $category)
                <option value="{{'category->id'}}">{{$category->name}}</option>
            @endforeach
            </select>
        </div>
        <div>
            <label for="body">Descripcion:</label>
            <textarea wire:model="body"  @error('body') is-invalid @enderror></textarea>
            @error('body')
                {{$message}}
            @enderror
        </div>
        <div>
            <button type="submit" class='boton-verde'>Publicar anuncio</button>
        </div>
    </form>
</div>
