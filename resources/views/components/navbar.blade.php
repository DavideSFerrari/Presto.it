<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{ route('homepage') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Presto.it</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Categorie
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Categoria 1</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Categoria 2</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Categoria 3</a></li>
          </ul>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="#" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Annunci</a>
        </li>
        <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Cosa ti serve?" aria-label="Cosa ti serve?">
        <button class="btn btn-outline-success" type="submit">Cerca</button>
      </form>
            @if (Route::has('login'))
                    @auth
                        <form action="{{route('logout')}}" method="POST"> 
      @csrf
      <button oneclick="event.preventDefault(); this.closest('form').submit();">
      <li class="nav-item">
      <a class="nav-link">
        Logout
        </a>
        </li>
      </button>
    </form>
    <p>Ciao, {{Auth::user()->email}},</p>
                    @else
                      <li class="nav-item"><a class="nav-link" href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a></li>


                        @if (Route::has('register'))
                        <li class="nav-item"><a class="nav-link" href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a></li>
                        @endif
                    @endauth
            @endif
      </ul>

    </div>
  </div>
</nav>