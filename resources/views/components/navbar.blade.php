<nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top">

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-around ps-1 pe-1" id="navbarSupportedContent">

        <div class="">
            <a class="navbar-brand anim" href="{{ route('homepage') }}">Presto.it</a>
        </div>



        <div class="">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">


                <div class="m-custom-3"> 
                    <div class="row">
                        <div class="input-group">
                            <div class="input-group-btn search-panel">
                                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                            aria-expanded="false">
                                            {{__('ui.categorie')}}
                                        </a>
                                        <ul class="dropdown-menu">
                                            @foreach ($categories as $category)
                                                <li><a class="dropdown-item"
                                                        href="{{ route('categories.detail', compact('category')) }}">{{ $category->name }}</a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </li>
                            </div>

                        <form action="{{route('announcements.search')}}" method="GET" role="search">
                            @csrf
                            <input type="search" class="form-control rounded-5" name="x" placeholder="Ricerca ...">
                        </form>

                            <span class="input-group-btn">
                                <form action="{{route('announcements.search')}}" method="GET" role="search">        
                                    <button class="btn btn-default" type="submit">
                                            <i class="bi bi-search"></i>
                                    </button>
                                </form>
                            </span>
                        </div>
                    </div>
                </div>
                
                <li class="nav-item">
                    <a class="nav-link anim" href="{{ route('announcements.index') }}">{{__('ui.annunci')}}</a>
                </li>

                @if (Route::has('login'))
                    @auth
                        <div class="sezioneUtente">
                            <a class="nav-link anim mx-2" href="#" class="my-2">Ciao {{ Auth::user()->name }}, {{__('ui.cosafai')}}</a>
                        </div>
                        <li class="nav-item">
                            @if (Route::has('login'))
                                @auth
                                    <a href="{{ route('announcements.create') }}" role="button" class="btn anim2 p-2 @if(request()->routeIs('announcements.create')) bg-black text-white @else '' @endif">{{__('ui.insertAd')}}</a>
                                @endauth
                            @endif
                        </li>

                        @if (Auth::user()->is_revisor)
                            <li class="nav-item">
                                <a class="btn anim2 p-2 mx-2 position-relative @if(request()->routeIs('revisor.index')) bg-black text-white @else '' @endif" aria-current="page"
                                href="{{ route('revisor.index') }}">{{__('ui.revisione')}}
                                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                    {{ App\Models\Announcement::toBeRevisionedCount() }}
                                        <span class="visually-hidden">Unread Message</span>
                                    </span>
                                </a>
                            </li>
                        @endif

                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button class="btn-1" onclick="event.preventDefault(); this.closest('form').submit();">
                                <li class="nav-item">
                                    <a class="nav-link anim ">
                                        Logout
                                    </a>
                                </li>
                            </button>
                        </form>

                @else
                    <li class="nav-item">
                        <a class="nav-link anim" href="{{ route('login') }}"
                            class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500 ">{{__('ui.accedi')}}</a>
                    </li>


                        @if (Route::has('register'))
                            <li class="nav-item"><a class="nav-link anim" href="{{ route('register') }}"
                                class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">{{__('ui.registrati')}}</a>
                            </li>
                        @endif
                    @endauth
                @endif


                        

                        <li class="nav-item">
            <x-_locale lang='it' nation='it'/>
        </li>
        <li class="nav-item">
            <x-_locale lang='en' nation='gb'/>
        </li>
        <li class="nav-item">
            <x-_locale lang='es' nation='es'/>
        </li>
        
            </ul>
        </div>
       


    

    </div>
</nav>
