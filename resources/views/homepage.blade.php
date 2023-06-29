<x-main>

  <div id="carouselExampleIndicators" class="carousel slide">
              <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
              </div>
              <div class="carousel-inner">
                <div class="carousel-item active ">
                  <img src="{{ url('/img/gatto1.jpg') }}" class="d-block w-70" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="{{ url('/img/gatto2.jpg') }}" class="d-block w-70" alt="...">
                </div>
                <div class="carousel-item ">
                  <img src="{{ url('/img/gatto3.jpg') }}" class="d-block w-70" alt="...">
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
          <x-card :$announcements>

          </x-card>
      </div>
  </x-main> 
  