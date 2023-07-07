<x-main>
    <!-- <div class="container text-center">
        <div class="row">
            <div class="col-12 text-dark p-5">
                <h1 class="display-2">Dettaglio annuncio</h1>
            </div>
        </div>
    </div> -->
    <div class="container bg-black p-custom-2 announcement-detail">
      <div class="d-flex">
        <section class="w-50">
            <div id="carouselExampleIndicators" class="carousel slide">
                <div class="carousel-inner">
                    <div class="carousel-item active ">
                        <img src="{{ url('/img/prova1.jpg') }}" class="d-block w-100 " alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ url('/img/prova2.jpg') }}" class="d-block  w-100 " alt="...">
                    </div>
                    <div class="carousel-item ">
                        <img src="{{ url('/img/gatto3.jpg') }}" class="d-block  w-100 " alt="...">
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </section>

            <section class="m-custom w-50 detail-container">
            <p class="card-text mt-2 w-100">{{ $announcement->category->name }} - Pubblicato il: {{ $announcement->created_at->format('d/m/Y')}}</p>
            <hr>
                <h3 class="card-title text-uppercase">{{ $announcement->title }}</h5>
                <br>
                <p class="card-text">Descrizione: {{ $announcement->description }}</p>
                <p class="card-text">Dettagli: {{ $announcement->detail }}</p>
                <p class="card-text">Prezzo: {{ $announcement->price }}€</p>
            </section>
        </div>
    </div>
</x-main>
