<x-main>          



                @if (Route::has('login'))
                        @auth
                        <a class="btn btn-primary" href="{{route('announcements.create')}}" role="button">Inserisci annuncio</a>
                        @endauth
                    @endif


<div class="container">
    <div class="row">
        @foreach ($announcements as $announcement)
        <div class="card" style="width: 18rem;">
            <img src="http://picsum.photos/200" class="card-img-top" alt="...">
            <div class="card-body">
            <h5 class="card-title">{{$announcement->title}}</h5>
            <p class="card-text">{{$announcement->price}} euro</p>
            <p class="card-text">{{$announcement->description}}</p>
            <p class="card-text">{{$announcement->detail}}</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
        @endforeach
    </div>
    


        </x-main>   