<div>
   <h1> Inserisci annuncio </h1>
   <form wire:submit.prevent="store">
    @csrf
    <div class="mb-3">
        <label for="title"> Titolo Annuncio</label>
        <input wire:model="title" type="text" class="form-control">
    </div>
    <div class="mb-3">
        <label for="description"> Descrizione</label>
        <textarea wire:model="body" type="text" class="form-control"></textarea>
    </div>
    <div class="mb-3">
        <label for="price"> Prezzo </label>
        <input wire:model="title" type="number" class="form-control">
    </div>
    <div class="mb-3">
        <label for="detail"> Dettagli </label>
        <input wire:model="detail" type="text" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary shadow px-4 py-2">Crea</button>

   </form>
</div>

//'title','price','description','detail','image','category_id'