<x-main>

  <div class="my-5 margin-left-right">
    <div id="carouselExampleIndicators" class="carousel slide">
        <div class="carousel-inner">
            <div class="carousel-item active ">
                <img src="{{ url('/img/imgcommerce_2.jpg') }}" class="d-block  img w-100 rounded-4" alt="...">
                <div class="container">
                <div class="row"> 
                <div class="carousel-caption d-none d-md-block  top-15 ">
                    <div class="hero-block__wrapper position-relative div-custom shadow h-50" style="background: linear-gradient(0deg, rgba(202,223,246,1) 0%, rgba(220,222,252,1) 100%);">
                        <div class="position-absolute m-4">
                            <h2 class="text-dark">{{__('ui.cardhome')}}</h2>
                            <div class="my-4">

                                

                                @if (Route::has('login'))
                                @auth
                                <a class="btn anim2 px-5" href="{{ route('announcements.create')}}"">{{__('ui.vendisubito')}}</a>
                                
                                @elseif (Route::has('logout'))
                                <a class="btn anim2 px-5" href="{{ route('login')}}"">{{__('ui.vendisubito')}}</a>
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

    <h3 class="text-center my-5 fs-1" style="font-family: 'EB Garamond', serif; font-weight: bold;">TOP CATEGORIE</h3>
    <div class="m-custom-4 my-5 mx-5 px-5">
        <div class="row justify-content-md-evenly">
            <div class="col-md-2 my-1">
                <a href="{{route('categories.detail', '1')}}">
                    <img src="{{ url('/img/motori.png') }}" class="img-fluid rounded-4 shadow card-custom" alt="Motori">
                </a>
            </div>
            <div class="col-md-2 my-1">
                <a href="{{route('categories.detail', '2')}}">
                    <img src="{{ url('/img/informatica.png') }}" class="img-fluid rounded-4 shadow card-custom" alt="Informatica">
                </a>
            </div>
            <div class="col-md-2 my-1">
                <a href="{{route('categories.detail', '5')}}">
                    <img src="{{ url('/img/giochi.png') }}" class="img-fluid rounded-4 shadow card-custom" alt="Giochi">
                </a>
            </div>
            <div class="col-md-2 my-1">
                <a href="{{route('categories.detail', '7')}}">
                    <img src="{{ url('/img/immobili.png') }}" class="img-fluid rounded-4 shadow card-custom" alt="Immobili">
                </a>
            </div>
            <div class="col-md-2 my-1">
                <a href="{{route('categories.detail', '6')}}">
                    <img src="{{ url('/img/sport.png') }}" class="img-fluid rounded-4 shadow card-custom" alt="Sport">
                </a>
            </div>
        </div>
    </div>


    <h3 class="text-center my-5 fs-1 text-uppercase" style="font-family: 'EB Garamond', serif; font-weight: bold;">{{__('ui.home')}}</h3>

    <div class="container my-5">
        <div class="row">
            <x-card :$announcements>
            </x-card>
        </div>

</x-main>
