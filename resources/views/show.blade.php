<x-main>          



                @if (Route::has('login'))
                        @auth
                        <a class="btn btn-primary" href="{{route('announcements.create')}}" role="button">Inserisci annuncio</a>
                        @endauth
                    @endif


<div class="container">
    <div class="row">

    <h3>Tutti gli annunci</h3> 
        <x-card :$announcements>

        </x-card>
    </div>
    


        </x-main>   

       