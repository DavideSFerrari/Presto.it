<x-main>

  <div class="my-5 ">
    <div id="carouselExampleIndicators" class="carousel slide">
        <div class="carousel-inner">
            <div class="carousel-item active ">
                <img src="{{ url('/img/prova1.jpg') }}" class="d-block img w-100" alt="...">
                <div class="container">
                <div class="row"> 
                <div class="carousel-caption d-none d-md-block  ">
                    <div class="hero-block__wrapper position-relative div-custom shadow h-50">
                        <div class="position-absolute container">
                            <h1 class="text-dark">Annuncio</h1>
                        </div>
                    </div>
                  </div>
                </div>
            </div>
            </div>
        </div>
    </div>
  </div>

    


    <h3 class="text-center my-5 fs-1">Annunci</h3>

    <div class="container my-5">
        <div class="row">
            <x-card :$announcements>
            </x-card>
        </div>

</x-main>
