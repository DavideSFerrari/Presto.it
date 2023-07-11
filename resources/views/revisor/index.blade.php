<x-main>

    <div class="container-fluid p-5 bg-gradient bg-success p-5 shadow mb-4">
        <div class="row">
            <div class="col-12 text-light p-5">
                <h1 class="display-2 text-center">
                    {{$announcement_to_check ? 'Annunci da revisionare' : 'Non ci sono annunci da revisionare'}}
                </h1>
            </div>
        </div>
    </div>
    
                            
    @if ($announcement_to_check)
        <div class="container">
            <div id="carouselExampleIndicators" class="carousel slide">
                @if ($announcement_to_check->images)
                <div class="carousel-inner">
                    @foreach ($announcement_to_check->images as $image)
                    <div class="carousel-item @if($loop->first)active @endif">
                        <img src="{{Storage::url($image->path)}}" class="img-fluid p-3 rounded" alt="">
                    </div>
                    @endforeach
                </div>
                @endif




                <div class="revisor-container">
                    <h1>{{ $announcement_to_check->title }}</h1>
                    <p>{{ $announcement_to_check->description }}</p>
                    <p class="text-uppercase">{{ $announcement_to_check->category->name }}</p>
                    <p class="card-footer">Pubblicato il: {{ $announcement_to_check->created_at->format('d/m/Y') }}
                        <div>
                            <div class="d-flex ">
                                <form
                                    action="{{ route('revisor.accepted_announcement', ['announcement' => $announcement_to_check]) }}"
                                    method="POST">
                                    @csrf
                                    @method('PATCH')
                                    <button type="submit" class="btn btn-success shadow">Accetta</button>
                                </form>
        
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
        </div>
    @endif

</x-main>