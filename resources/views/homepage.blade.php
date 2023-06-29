<x-main>

<div id="carouselExampleIndicators" class="carousel slide">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active ">
                <img src="{{ url('/img/gatto1.jpg') }}" class="d-block w-70 center-block" alt="...">
              </div>
              <div class="carousel-item ">
                <img src="{{ url('/img/gatto2.jpg') }}" class="d-block w-70 center-block" alt="...">
              </div>
              <div class="carousel-item ">
                <img src="{{ url('/img/gatto3.jpg') }}" class="d-block w-70 center-block" alt="...">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>


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

