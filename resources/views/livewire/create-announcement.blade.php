<div class="p-5 rounded-4 shadow">
   <h1> Inserisci annuncio </h1>
   
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
        <input wire:model="price" type="number" class="form-control @error('price') is-invalid @enderror">
        @error('price')
            {{$message}}
        @enderror
    </div>
    <div class="mb-3">
        <label for="detail"> Dettagli </label>
        <input wire:model="detail" type="text" class="form-control">
    </div>

    <div>
        <select>
            @foreach ($categories as $category)
            <option value="{{$category->id}}">{{$category->name}} {{$category->surname}}</option>
            @endforeach
        </select>
    </div>

    <div class="mb-3">
        <label for="image"> Image </label>
        <input wire:model="image" type="file" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary shadow px-4 py-2">Crea</button>

   </form>
</div>

