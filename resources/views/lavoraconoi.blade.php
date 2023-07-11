<x-main>
    <div class="container">
    <div class="">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center my-5 fs-1">{{__('ui.lavora')}}</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <p class="text-center my-5 fs-4">{{__('ui.conNoi')}}</p>
            </div>
        </div>
    </div>
<div class="p-5 rounded-4 my-5 shadow bg-white">
    <form>
        @csrf
        <div class="mb-3">
            <label for="name"> {{__('ui.nome')}}</label>
            <input type="text" class="form-control">   
        </div>
        <div class="mb-3">
            <label for="surname"> {{__('ui.cognome')}}</label>
            <input type="text" class="form-control">   
        </div>
        <div class="mb-3">
            <label for="email"> Email</label>
            <input type="text" class="form-control">
        <br>

            <a href="{{route('mail.become_revisor')}}" class="btn btn-primary shadow px-4 py-2">{{__('ui.inviaRichiesta')}}</a>
    
       </form>
    </div>

    

</div>
</x-main>