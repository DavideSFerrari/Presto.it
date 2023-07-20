<x-main>

    <div class="container-fluid p-5 bg-gradient bg-revisor p-5 shadow mb-4">
        <div class="row">
            <div class="col-12 p-5">
                <h1 class="display-2 text-center h-revisor text-uppercase" style="font-family: 'EB Garamond', serif; font-weight: bold;">
                    {{$announcement_to_check ? 'Annunci da revisionare' : 'Non ci sono annunci da revisionare'}}
                </h1>
            </div>
        </div>
    </div>
    
    <div class="container bg-white">                  
        @if ($announcement_to_check)
            <div class="container carouselrevisor-container">
                <div id="carouselExampleIndicators" class="carousel slide">

                    @if ($announcement_to_check->images->isNotEmpty())
                        <div class="carousel-inner">
                            @foreach ($announcement_to_check->images as $image)
                            <div class="carousel-item @if($loop->first)active @endif">
                                <img src="{{$image->getUrl(300,400)}}" class="img-fluid p-3 rounded" alt="" style="display: block; margin: auto;">
                            </div>
                            @endforeach
                        </div>
                        <p class="card-footer text-center">Pubblicato il: {{ $announcement_to_check->created_at->format('d/m/Y') }}
                        <div class="revisortags-container">
                            <div class="col-md-3 borded-end text-center m-auto">
                                <h5 class="tc-accent mt-3">Tags</h5>
                                <div class="p-2">
                                    @if ($image->labels)
                                        @foreach ($image->labels as $label)
                                            <p class="d-inline">{{$label}},</p>
                                        @endforeach
                                    @endif
                                </div>
                            </div>

                            <div class="card-boby text-center">
                                <h5 class="tc-accent">Revisione Immagini</h5>
                                    <div class="d-sm-flex justify-content-sm-evenly">
                                        <p>Adulti: <span class="{{$image->adult}}"></span></p>
                                        <p>Satira: <span class="{{$image->spoof}}"></span></p>
                                        <p>Medicina: <span class="{{$image->medical}}"></span></p>
                                        <p>Violenza: <span class="{{$image->violence}}"></span></p>
                                        <p>Contenuto Ammiccante: <span class="{{$image->racy}}"></span></p>
                                    </div>
                            </div>
                        </div>
                    @else
                        <div class="carousel-inner">

                            <div class="carousel-item active">
                                <img src="https://picsum.photos/400/350" class="img-fluid p-3 rounded" alt="..." style="display: block; margin: auto;">
                            </div>
                            <div class="carousel-item">
                                <img src="https://picsum.photos/400/350" class="img-fluid p-3 rounded" alt="..." style="display: block; margin: auto;">
                            </div>
                            <div class="carousel-item ">
                                <img src="https://picsum.photos/400/350" class="img-fluid p-3 rounded" alt="..." style="display: block; margin: auto;">
                            </div>

                        </div>
                    @endif

                        <button class="carousel-control-prev carousel-prev-indicator bg-black" type="button" data-bs-target="#carouselExampleIndicators"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next carousel-next-indicator bg-black" type="button" data-bs-target="#carouselExampleIndicators"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button> 
                        
                </div>
                
            </div>

            <hr>

                <div class="container revisor-container">
                    <h1 class="text-center">{{ $announcement_to_check->title }}</h1>
                    <p class="text-center">{{ $announcement_to_check->description }}</p>
                    <p class="text-uppercase text-center">{{ $announcement_to_check->category->name }}</p>
                    <div>
                        <hr>
                        <div class="d-flex justify-content-center">
                            <form action="{{ route('revisor.accepted_announcement', ['announcement' => $announcement_to_check]) }}" method="POST">
                                @csrf
                                @method('PATCH')
                                <button type="submit" class="btn btn-success shadow m-1">{{__('ui.accetta')}}</button>
                            </form>
                            
                                <!-- <div class="col-6 col-md-3 text end"> -->
                            <form action="{{ route('revisor.reject_announcement', ['announcement' => $announcement_to_check]) }}" method="POST">
                                @csrf
                                @method('PATCH')
                                <button type="submit" class="btn btn-danger shadow m-1">{{__('ui.rifiuta')}}</button>
                            </form>
                                                               
                                <!-- </div> -->
                        </div>
                    </div>
                </div> 

        @endif
    </div>

    @if (Auth::user()->last_announcement_revised)
    <div class="d-flex justify-content-center m-5 pt-5">
        <form action="{{ route('revisor.restore_announcement', ['announcement' => Auth::user()->last_announcement_revised]) }}" method="POST">
            @csrf
            @method('PATCH')
            <button type="submit" class="btn btn-presto btn btn-outline-danger btn-lg">{{__('ui.annulla')}}</button>
        </form>
    </div>
@endif

<div class="d-flex justify-content-center m-5 pt-5 ">
<button onclick="window.location.href='{{ route('homepage') }}'" class=" btn btn-outline-success btn-lg">{{__('ui.homepage')}}</button>
</div>

</x-main>