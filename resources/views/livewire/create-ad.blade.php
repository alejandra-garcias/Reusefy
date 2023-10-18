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
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <label for="body">Descripcion:</label>
            <textarea class="" wire:model="body" @error('body') is-invalid @enderror></textarea>
            @error('body')
                {{ $message }}
            @enderror
        </div>
        <div>
            <input wire:model = "temporary_images" type="file" name="images" multiple class="form-control shadow @error('temporary_images.*') is-invalid @enderror">
            @error('temporary_images.*')
            <p class="text-danger mt-2">{{$message}}</p>
            @enderror
        </div>
        @if (!empty($images))
        <div class="row">
            <div class="col-12">
                <p>{{__('Vista previa')}}</p>
                <div class="row">
                @foreach ($images as $key=>$image )
                <div class='col-12 col-md-4'>
                    <img src="{{$image->temporaryUrl()}}" alt="" class="img-fluid">
                    <button type= "button" class="btn btn-danger" wire:click='removeImage({{$key}})'>Eliminar</button>
                </div>

                @endforeach
                </div>

            </div>
        </div>



        @endif
        <div>
            <button type="submit" class='btn btn-green'>Publicar anuncio</button>
        </div>


    </form>
</div>
