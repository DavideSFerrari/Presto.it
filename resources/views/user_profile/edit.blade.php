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
                            <li class="breadcrumb-item"><a href="{{ route('user_profile.index') }}">Profilo Utente</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{ __('Modifica profilo') }}</li>
                        </ol>
                    </nav>
                </div>
            </div>

            <div class="row position-relative">
                <div class="col-lg-4">
                    <div class="card mb-4">
                        <div class="card-body text-center">
                            <img src="{{ asset('https://bootdey.com/img/Content/avatar/avatar7.png') }}" alt="avatar"
                                class="rounded-circle img-fluid" style="width: 150px;">
                            <h5 class="my-3">{{ Str::ucfirst(Auth::user()->name) }}</h5>
                            <p class="text-muted mb-4">{{ Str::ucfirst(Auth::user()->site) }}</p>
                        </div>
                    </div>
                </div>

                <form action="{{ route('user_profile.update') }}" method="POST" class="was-validated"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <fieldset class="rounded  bg-custom">
                        <legend class="m-2 text-center">{{ __('Informazioni Utente') }}</legend>
                        <div class="m-3 d-flex">
                            <label class="form-label mx-auto" for="name">Nome</label>
                            <input class="w-75" type="text" name="name"
                                value="{{ Auth::user()->name }}" id="name" />
                        </div>
                        
                        <div class="m-3 d-flex">
                            <label class="form-label mx-auto" for="email">{{ __('Indirizzo E-mail') }}</label>
                            <input class="w-75" type="email" name="email"
                                value="{{ Auth::user()->email }}" id="email" />
                        </div>
                      
                        <div class="m-3 d-flex">
                            <label class="form-label mx-auto" for="phone">{{ __('Telefono fisso/mobile') }}</label>
                            <input class="w-75" type="text" name="phone"
                                value="{{ Auth::user()->phone}}" id="phone" />
                        </div>
                        
                        <div class="m-3 d-flex">
                            <label class="form-label mx-auto" for="city">{{ __("Citta'") }}</label>
                            <input class="w-75" type="text" name="address"
                                value="{{ Auth::user()->address}}" id="address" />
                        </div>
                        <div class="m-3 d-flex">
                            <label class="form-label mx-auto" for="user_img">Immagine profilo</label>
                            <input class="form-label w-75" type="file" name="path" value=""
                                id="user_img" />
                        </div>
                        <button type="submit" class="btn btn-form m-3 float-end anim2">{{ __('Modifica profilo') }}</button>
                    </fieldset>
                </form>
                <form action="{{ route('user_profile.destroy') }}" method="POST" class=""
                    id="delete-{{ Auth::user()->id }}">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger float-end m-3">{{__('Cancella profilo e annunci')}}</button>

                </form>

              
            </div>
        </div>
    </section>

    
</x-main>