<x-main>

  <div class="my-5 ">
    <div id="carouselExampleIndicators" class="carousel slide">
        <div class="carousel-inner">
            <div class="carousel-item active ">
                <img src="{{ url('/img/prova1.jpg') }}" class="d-block img w-100" alt="...">
                <div class="container">
                <div class="row"> 
                <div class="carousel-caption d-none d-md-block  top-15 ">
                    <div class="hero-block__wrapper position-relative div-custom shadow h-50">
                        <div class="position-absolute m-4">
                            <h2 class="text-dark">Dai un valore aggiunto alla tua vita, compra su Presto.it</h2>
                            <div class="my-4">

                                

                                @if (Route::has('login'))
                                @auth
                                <a class="btn anim2 px-5" href="{{ route('announcements.create')}}"">Vendi subito</a>
                                
                                @elseif (Route::has('logout'))
                                <a class="btn anim2 px-5" href="{{ route('login')}}"">Vendi subito</a>
                                @endauth
                                @endif
                            </div>
                        </div>
                    </div>
                  </div>
                </div>
            </div>
            </div>
        </div>
    </div>
  </div>

    


    <h3 class="text-center my-5 fs-1">{{__('ui.home')}}</h3>

    <div class="container my-5">
        <div class="row">
            <x-card :$announcements>
            </x-card>
        </div>

</x-main>
