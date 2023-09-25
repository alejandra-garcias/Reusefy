<div>
    @if (session()->has('message'))
        <div class="alert alert-success" role="alert">
            {{session('message')}}
        </div>
    @endif
    
    <form wire:submit.prevent='store'>
        @csrf
        <div class="mb-3">
            <label for="title" class='form-label'>Titulo:</label>
            <input wire:model="title" type="text" class="form-control" @error('title') is-invalid @enderror">
            @error('title')
                {{$message}}
            @enderror
        </div>
        <div class="mb-3">
            <label for="price" class='form-label'>Precio:</label>
            <input wire:model="price" type="text" class="form-control" @error('price') is-invalid @enderror">
            @error('price')
                {{$message}}
            @enderror>
        </div>
        <div class="mb-3">
            <label for="body" class='form-label'>Descripcion:</label>
            <textarea wire:model="body" class="form-control" @error('body') is-invalid @enderror></textarea>
            @error('body')
                {{$message}}
            @enderror
        </div>
        <div class="my-3">
            <button type="submit" class='boton-verde'>Crear</button>
        </div>
    </form>
</div>
