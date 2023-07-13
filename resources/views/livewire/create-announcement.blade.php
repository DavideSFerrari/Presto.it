<div class="p-5 rounded-4 my-5 shadow bg-white">
   <h1>{{__('ui.create')}}</h1>
   <br>
   
   @if (session()->has ('message'))
    <div class="flex flex row hustify-center my-2 alert alert-success">
        {{ session('message')}}
    </div>
   @endif
   
   <form wire:submit.prevent="store">
    @csrf
    <div class="mb-3">
        <label for="title"> {{__('ui.titolo')}}</label>
        <input wire:model="title" type="text" class="form-control @error('title') is-invalid @enderror">
        @error('title')
            {{$message}}
        @enderror    
    </div>
    <div class="mb-3">
        <label for="description"> {{__('ui.descrizione')}}</label>
        <textarea wire:model="description" type="text" class="form-control @error('description') is-invalid @enderror"></textarea>
        @error('description')
            {{$message}}
        @enderror
    </div>
    <div class="mb-3">
        <label for="price"> {{__('ui.prezzo')}} </label>
        <input wire:model="price" type="float" class="form-control @error('price') is-invalid @enderror">
        @error('price')
            {{$message}}
        @enderror
    </div>
    <div class="mb-3">
        <label for="detail"> {{__('ui.dettagli')}} </label>
        <input wire:model="detail" type="text" class="form-control">
    </div>

    <div>
    <label for="category">{{__('ui.categoria')}}</label>
    <select class="form-control" id="category" wire:model="category">
        <option selected>{{__('ui.scegli')}}</option>
            @foreach ($categories as $category)
            <option value="{{$category->id}}">{{$category->name}}</option>
            @endforeach
        </select>
    </div>
    <br>
<div class="mb-3">
    <input wire:model="temporary_images" type="file" name="images" multiple class="form-control shadow @error('temporary_images.*') is-invalid @enderror" placeholder="Img"/>
    @error('temporary_images.*')
        <p class="text-danger mt-2">{{$message}}</p>
    @enderror  
</div>

@if (!empty($images))

<div class="row">
    <div class="col-12">
        <p>Photo preview:</p>
        <div class="row border border-4 border-info rounded shadow py-4">
            @foreach ($images as $key => $image)
            <div class="col my-3">
                <div class="img-preview m-auto p-0 shadow rounded" style="background-image: url({{$image->temporaryUrl()}}); background-position: center; background-size: cover;"></div>
                <button type="button" class="btn btn-danger shadow d-block text-center mt-4 mx-auto" wire:click="removeImage({{$key}})">Cancella</button>
            </div>              
            @endforeach
        </div>
    </div>
</div>    
@endif    
    <hr class="mt-5">
    <button type="submit" class="btn btn-primary shadow px-4 py-2" style="display: block; margin: auto; width: 25%;">{{__('ui.cancella')}}</button>
</form>
</div>