<x-main>

    <div class="container w-75 p-custom-2 announcement-showdetail bg-white">
        <div class="">

            <section class="w-75 m-auto">
                <div id="carouselExampleIndicators" class="carousel slide">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
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

            <section class="w-100 m-auto">
                <p class="card-text mt-2 w-100 text-center">{{ $announcement->category->name }} - Pubblicato il: {{ $announcement->created_at->format('d/m/Y')}}</p>
                <div class="announcement-showdetailInfo">
                <h3 class="card-title text-uppercase text-center text-black-50">{{ $announcement->title }}</h5>
                <hr>
                    <p class="card-text text-black-50">Descrizione: {{ $announcement->description }}</p>
                    <p class="card-text text-black-50">Dettagli: {{ $announcement->detail }}</p>
                    <h4 class="card-title text-uppercase text-center text-black-50">{{ $announcement->price }}€</h4>
                </div>
            </section>
        
        </div>
    </div>

</x-main>
