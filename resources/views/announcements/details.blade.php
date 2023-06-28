<x-main>
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class=></h1>
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://picsum.photos/seed/picsum/200/300" class="img-fluid p-3 rounded" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://picsum.photos/seed/picsum/200/300" class="img-fluid p-3 rounded" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://picsum.photos/seed/picsum/200/300" class="img-fluid p-3 rounded" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
    <h5 class ="card-title">Titolo:{{$announcement->title}}</h5>
    <h5 class ="card-text">Descrizione:{{$announcement->description}}</h5>
    <h5 class ="card-text">Prezzo:{{$announcement->price}}</h5>
        </div>
    </div>
</div>
</x-main>