<div>

    @if (session()->has('message'))
        <div role="alert">
            {{ session('message') }}
        </div>
    @endif

    <form wire:submit.prevent='store'>
        @csrf

        <h1 class="gradiant-text">¿{{ __('Que te gustaria vender') }}? <img class='logo-texto'
                src="{{ asset('vender.svg') }}"alt=""></h1>
        <div class="section-1">
            <div class="mb-3">
                <label class="form-label gradiant-text" for="title">{{ __('Título') }}</label>
                <input class="form-control form-control-sm input-box" placeholder="¿Que vendes?" wire:model="title"
                    type="text" @error('title') is-invalid @enderror">
                @error('title')
                    {{ $message }}
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label gradiant-text" for="price">{{ __('Precio') }}</label>
                <input class="form-control form-control-sm input-box" placeholder="¿Por cuanto lo vendes?"
                    wire:model="price" type="text" @error('price') is-invalid @enderror">
                @error('price')
                    {{ $message }}
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label gradiant-text" for="category">{{ __('Categoría') }} :</label>
                <select class="form-control input-box" wire:model.defer="category">
                    <option value=''>{{ __('Seleccionar Categoría') }}</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="section-2">
            <div class="mb-3">
                <label class="form-label gradiant-text" for="body">{{ __('Descripción') }} :</label>
                <textarea class="form-control input-box" wire:model="body" @error('body') is-invalid @enderror></textarea>
                @error('body')
                    {{ $message }}
                @enderror
            </div>
        </div>
        <div class="section-3">
            <div class="mb-3">
                <input wire:model = "temporary_images" type="file" name="images" multiple
                    class="form-control form-control-sm @error('temporary_images.*') is-invalid @enderror">
                @error('temporary_images.*')
                    <p class="text-danger mt-2">{{ $message }}</p>
                @enderror
            </div>
            @if (!empty($images))
                <div class="row">
                    <div class="col-12">
                        <p>{{ __('Vista previa') }}</p>
                        <div class="row">
                            @foreach ($images as $key => $image)
                                <div class='col-12 col-md-4'>
                                    <img class="logo-texto" src="{{ $image->temporaryUrl() }}" alt="" class="img-fluid">
                                    <button type= "button" class="btn btn-danger"
                                        wire:click='removeImage({{ $key }})'>{{ __('Eliminar') }}</button>
                                </div>
                            @endforeach
                        </div>

                    </div>
                </div>



            @endif
        </div>
        <div>
            <button type="submit" class='btn btn-grad'>Publicar anuncio</button>
        </div>


    </form>
</div>
