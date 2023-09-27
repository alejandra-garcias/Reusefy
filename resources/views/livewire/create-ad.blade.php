<div>

    @if (session()->has('message'))
        <div role="alert">
            {{ session('message') }}
        </div>
    @endif

    <form wire:submit.prevent='store'>
        @csrf

        <h1>¿Que te gustaria vender?</h1>
        <div>
            <label for="title">Titulo</label>
            <input class="input-box" placeholder="¿Que vendes?" wire:model="title" type="text" @error('title') is-invalid @enderror">
            @error('title')
                 {{ $message }}
            @enderror
        </div>
        <div>
            <label for="price">Precio</label>
            <input class="input-box" placeholder="¿Por cuanto lo vendes?" wire:model="price" type="text" @error('price') is-invalid @enderror">
            @error('price')
                {{ $message }}
            @enderror
        </div>
        <div>
            <label for="category">Categoria:</label>
            <select class="input-box" wire:model.defer="category" >
                <option value=''>Selecciona una categoria</option>
                @foreach ($categories as $category)
                    <option value="{{ 'category->id' }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <label for="body">Descripcion:</label>
            <textarea class="" placeholder="    Describe tu articulo, incluye todos los detalles que puedas." wire:model="body" @error('body') is-invalid @enderror></textarea>
            @error('body')
                {{ $message }}
            @enderror
        </div>
        <div>
            <button type="submit" class='btn btn-green'>Publicar anuncio</button>
        </div>

    </form>
</div>
