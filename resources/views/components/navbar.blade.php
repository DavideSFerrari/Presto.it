<nav class="navbar navbar-expand-lg bg-body-tertiary">

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-around ps-1 pe-1" id="navbarSupportedContent">

        <div class="">
            <a class="navbar-brand anim" href="{{ route('homepage') }}"
                class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Presto.it</a>
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
                            <li><a class="dropdown-item" href="{{route('categories.detail', ['category' => $category['id']])}}">{{$category->name}}</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>  
                            @endforeach
                        </ul>   
                          
                    <li class="nav-item">
                        <a class="nav-link anim" href="{{route('show')}}">Annunci</a>
                    </li>

                    
                    
                    @if (Route::has('login'))
                        @auth
                        <a class="nav-link anim mx-2" href="#" class="my-2">Ciao, {{ Auth::user()->email }},</a>
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
                            <li class="nav-item">

                                @if (Route::has('login'))
                                @auth
                                <a class="btn anim2 p-2" href="{{route('announcements.create')}}" role="button">Inserisci annuncio</a>
                                @endauth
                                @endif
                    </li>

                    


                        @else
                            <li class="nav-item"><a class="nav-link anim" href="{{ route('login') }}"
                                    class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500 ">Log
                                    in</a></li>

        
            
            @if (Route::has('login'))
                @auth
                <a class="nav-link anim mx-2" href="#" class="my-2">Ciao, {{ Auth::user()->email }},</a>
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
                    <li class="nav-item">
                
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