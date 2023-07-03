<nav class="navbar navbar-expand-lg bg-body-tertiary">

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
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle anim" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Categorie
                        </a>
                        <ul class="dropdown-menu">
                            @foreach ($categories as $category)
                            <li><a class="dropdown-item" href="{{route('categories.detail', compact('category'))}}">{{$category->name}}</a></li>
                            @endforeach
                        </ul>   
                          
                    <li class="nav-item">
                        <a class="nav-link anim" href="{{route('show')}}">Annunci</a>
                    </li>

                    
                    
                    @if (Route::has('login'))
                        @auth
                        <div class="sezioneUtente">
                        <a class="nav-link anim mx-2" href="#" class="my-2">Ciao {{ Auth::user()->name }}, cosa vuoi fare?</a>
                        </div>

                        <li class="nav-item">
                                @if (Route::has('login'))
                                @auth
                                <a class="btn anim2 p-2" href="{{route('announcements.create')}}" role="button">Inserisci annuncio</a>
                                @endauth
                                @endif
                            </li> 

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

                            @if (Auth::user()->is_revisor)
                                <li class="nav-item">
                                    <a class="nav-link anim" aria-current="page" href="{{route('revisor.index')}}">
                                        Zona Revisore
                                        <span class="badge bg-danger">{{\App\Models\Announcement::ToBeRevisionedCount()}}
                                            <span class="visually-hidden">unread messages</span>
                                        </span>
                                    </a>
                                </li>  
                            @endif
                
            </li>
                @else
                    <li class="nav-item"><a class="nav-link anim" href="{{ route('login') }}"
                            class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500 ">Log
                            in</a></li>


                    @if (Route::has('register'))
                        <li class="nav-item"><a class="nav-link anim" href="{{ route('register') }}"
                                class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        </li>
                    @endif
                @endauth
            @endif

        </ul>
</div>
    
</div>
</nav>