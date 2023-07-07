<div class="p-5 rounded-4 my-5 shadow bg-white">
   <h1> Inserisci il tuo annuncio!</h1>
   <br>
   
   @if (session()->has ('message'))
    <div class="flex flex row hustify-center my-2 alert alert-success">
        {{ session('message')}}
    </div>
   @endif
   
   <form wire:submit.prevent="store">
    @csrf
    <div class="mb-3">
        <label for="title"> Titolo Annuncio</label>
        <input wire:model="title" type="text" class="form-control @error('title') is-invalid @enderror">
        @error('title')
            {{$message}}
        @enderror    
    </div>
    <div class="mb-3">
        <label for="description"> Descrizione</label>
        <textarea wire:model="description" type="text" class="form-control @error('description') is-invalid @enderror"></textarea>
        @error('description')
            {{$message}}
        @enderror
    </div>
    <div class="mb-3">
        <label for="price"> Prezzo </label>
        <input wire:model="price" type="float" class="form-control @error('price') is-invalid @enderror">
        @error('price')
            {{$message}}
        @enderror
    </div>
    <div class="mb-3">
        <label for="detail"> Dettagli </label>
        <input wire:model="detail" type="text" class="form-control">
    </div>

    <div>
    <label for="category">Categoria</label>
    <select class="form-control" id="category" wire:model="category">
        <option selected>Scegli categoria</option>
            @foreach ($categories as $category)
            <option value="{{$category->id}}">{{$category->name}}</option>
            @endforeach
        </select>
    </div>
    <br>
<div class="mb-3">
    <input wire:model="temporary_images" type="file" name="images" multiple class="form-control @error('temporary_images.*') is-invalid @enderror" placeholder="Img"/>
    @error('temporary_images.*')
        <p class="text-danger mt-2">{{$message}}</p>
    @enderror  
</div>

@if (!empty($images))

<div class="row">
    <div class="col-12">
        <p>Photo preview:</p>
        <div class="row border border-4 border-info rounded shadow py4">
            @foreach ($images as $key => $image)
            <div class="col my-3">
                <div class="img-preview mx-auto shadow rounded" style="background-image: url({{$image->temporaryUrl()}});"></div>
                <button type="button" class="btn btn-danger shadow d-block text-center mt-2 mx-auto" wire:click="removeImage({{$key}})">Cancella</button>
            </div>              
            @endforeach
        </div>
    </div>
</div>    
@endif    
  
    <button type="submit" class="btn btn-primary shadow px-4 py-2">Crea</button>

   </form>
</div>