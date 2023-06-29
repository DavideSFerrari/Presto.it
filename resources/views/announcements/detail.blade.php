<x-main>
<div class=container-fluid p-5 bg-gradient bg-success shadow mb-4>
    <div class="row">
        <div class="col-12 text-dark p-5">
            <h1 class="display-2">Annuncio {{$announcement->title}}</h1>
        </div>
    </div>
</div>
<div id="carouselExampleIndicators" class="carousel slide">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active ">
                <img src="{{ url('/img/prova1.jpg') }}" class="d-block img w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="{{ url('/img/prova2.jpg') }}" class="d-block img w-100 " alt="..." style="width: 1564px;">
              </div>
              <div class="carousel-item ">
                <img src="{{ url('/img/gatto3.jpg') }}" class="d-block img w-100" alt="..." style="width: 1564px;">
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
    <h5 class="card-title">Titolo:{{$announcement->title}}</h5>
    <p class="card-text">Descrizione:{{$announcement->description}}</p>
    <p class="card-text">Prezzo:{{$announcement->price}}</p>
    


</x-main>



