<x-main>

    <div class="container-fluid p-5 bg-gradient bg-success p-5 shadow mb-4">
        <div class="row">
            <div class="col-12 text-light p-5">
                <h1 class="display-2">
                    {{$announcement_to_check ? 'Ecco gli annunci da revisionare' : 'Non ci sono annunci da revisionare'}}
                </h1>
            </div>
        </div>
    </div>

    @if ($announcement_to_check)
    <div class="container">
        <div id="carouselExampleIndicators" class="carousel slide">
            <div class="carousel-inner">
                <div class="carousel-item active ">
                    <img src="http://picsum.photos/1080" class="d-block img w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block" >

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
                <h5>{{ $announcement_to_check->title }}</h5>
                        <p>{{ $announcement_to_check->description }}</p>                                </form>

                                <!-- <div class="col-6 col-md-3 text end"> -->
                                <div>
            <div class="d-flex justify-content-between">
                <form
                    action="{{ route('revisor.accepted_announcement', ['announcement' => $announcement_to_check]) }}"
                    method="POST">
                    @csrf
                    @method('PATCH')
                    <button type="submit" class="btn btn-success shadow">Accetta</button>
                </form>                        </div>
                    </div>
                <!-- <div class="col-6 col-md-3 text end"> -->
                <form
                    action="{{ route('revisor.reject_announcement', ['announcement' => $announcement_to_check]) }}"
                    method="POST">
                    @csrf
                    @method('PATCH')
                    <button type="submit" class="btn btn-danger shadow">Rifiuta</button>
                </form>
                <!-- </div> -->
            </div>
        </div>

      </div>
    </div>

    @endif

</x-main>