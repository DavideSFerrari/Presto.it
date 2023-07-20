<x-main>
    <style>
        body {
                background-image: linear-gradient(180deg, rgba(0%, 40%, 100%, 0.4), rgba(0%, 20%, 100%, 0.1));
            }
        .footer-class:hover {
            border-left: 1px solid black;
            border-top: 5px solid black;
            border-right: 1px solid black;
            border-bottom: 1px solid black;
            border-radius: 50%;
            border-width: 100%;
            transition: border 0.2s linear 0s;
        }
</style>

    <section>
        <div class="container py-5">
            <div class="row">
                <div class="col">
                    <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3 mb-4">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="{{ route('homepage') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">User Profile</li>
                        </ol>
                    </nav>
                </div>
            </div>

            <div class="container">
                <div class="main-body">
                
                      <div class="row gutters-sm">
                        <div class="col-md-4 mb-3">
                          <div class="card">
                            <div class="card-body">
                              <div class="d-flex flex-column align-items-center text-center">
                                <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150">
                                <div class="mt-3">
                                  <h4>{{ Auth::user()->name }}</h4>
                                  <p class="text-secondary mb-1"> Descrizione {{ Auth::user()->description}}
                                  
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-8">
                          <div class="card mb-3">
                            <div class="card-body">
                              <div class="row">
                                <div class="col-sm-3">
                                  <h6 class="mb-0">Nome</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    {{ Auth::user()->name }}
                                </div>
                              </div>
                              <hr>
                              <div class="row">
                                <div class="col-sm-3">
                                  <h6 class="mb-0">Email</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    {{ Auth::user()->email }}
                                </div>
                              </div>
                              <hr>
                              <div class="row">
                                <div class="col-sm-3">
                                  <h6 class="mb-0">Telefono Fisso/Mobile</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                  {{ Auth::user()->phone }}
                                </div>
                              </div>
                              <hr>
                              <div class="row">
                                <div class="col-sm-3">
                                  <h6 class="mb-0">Indirizzo</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                  {{ Auth::user()->address}}
                                </div>
                              </div>
                              <hr>
                              <div class="row">
                                <div class="col-sm-3">
                                  <h6 class="mb-0">Città</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                  {{ Auth::user()->site }}
                                </div>
                              </div>
                              <hr>
                              <div class="row">
                                <div class="col-sm-12">
                                  <a class="btn anim2" target="_blank" href="{{route ('user_profile.edit')}}">Modifica</a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                </div>
            </div>
                    
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Titolo</th>
                                <th scope="col">Descrizione</th>
                                <th scope="col">Prezzo</th>
                                <th scope="col">Dettaglio</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                        
                        
                        
                        <tbody>
                            @foreach ($announcements as $announcement)
                                <tr>
                                    <th scope="row">{{ $announcement['id'] }}</th>
                                    <td>{{ $announcement['title'] }}</td>
                                    <td>{{ $announcement['description'] }}</td>
                                    <td>{{ $announcement['price'] }}</td>
                                    <td>{{ $announcement['detail'] }}</td>
                                    <td>
                                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                            
                                            <a href="{{ route('announcements.create', ['announcement' => $announcement['id']]) }}"
                                                class="btn btn-warning me-md-2">Modifica</a>
                                                <form action="{{ route('announcements.delete', ['announcement' => $announcement['id']]) }}" method='POST'>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-danger me-md-2">Cancella</button>
                                                </form>
                                                
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
        
                        </tbody>
                    </table>
                       
                </div>
            </div>
        </div>
        </div>
        
    </section>


    
    
</x-main>