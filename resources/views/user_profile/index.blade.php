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

            <div class="row position-relative">
                <div class="col-lg-4">
                    <div class="card mb-4">
                        <div class="card-body text-center">
                            
                            <h5 class="my-3">{{ Auth::user()->name }}</h5>
                            <h6 class="my-3">{{ Auth::user()->email }}</h5>
                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 ">
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">{{ __('Nome') }}</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">{{ Auth::user()->name }}</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Email</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">{{ Auth::user()->email }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        @forelse ($announcements as $announcement)
                        <x-card :$announcements>

                        </x-card>
                        @empty
                    </div>
                    <div class="row py-3">
                        <div>
                            Nessun annuncio, sorry. :(
                        </div>
                    </div>
                    @endforelse
                </div>
            </div>
        </div>
        </div>
        {{-- {{$advs->link()}} --}}
    </section>
    
</x-main>