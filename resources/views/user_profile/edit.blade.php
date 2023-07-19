<x-main>
    
    <div class="row mx-5">
    <section style="background-color: #eee;">
        <div class="container py-5">
            <div class="row">
                <div class="col">
                    <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3 mb-4">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="{{ route('homepage') }}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('user_profile.index') }}">User</a></li>
                            <li class="breadcrumb-item active" aria-current="page">edit</li>
                        </ol>
                    </nav>
                </div>
            </div>

            <div class="row position-relative">
                <div class="col-lg-4">
                    <div class="card mb-4">
                        <div class="card-body text-center">
                            <img src="{{ asset('/storage/img/placeholderlogin.png') }}" alt="avatar"
                                class="rounded-circle img-fluid" style="width: 150px;">
                            <h5 class="my-3">{{ Auth::user()->name }} {{ Auth::user()->surname }}</h5>
                            <p class="text-muted mb-4">{{ Auth::user()->city }}</p>
                        </div>
                    </div>
                </div>

                <form action="{{ route('user-profile-information.update') }}" method="POST" class="was-validated" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <fieldset class="rounded  bg-custom text-white">
                        <legend class="m-2 text-center">{{ __('ui.editInfo') }}</legend>
                        <div class="m-3 d-flex">
                            <label class="form-label mx-auto" for="name">Nome</label>
                            <input class="form-control w-75" type="text" name="name"
                                value="{{ Auth::user()->name }}" id="name" />
                        </div>
                        <div class="m-3 d-flex">
                            <label class="form-label mx-auto" for="surname">Cognome</label>
                            <input class="form-control w-75" type="text" name="surname"
                                value="{{ Auth::user()->surname }}" id="surname" />
                        </div>
                        <div class="m-3 d-flex">
                            <label class="form-label mx-auto" for="email">Email</label>
                            <input class="form-control w-75" type="mail" name="email"
                                value="{{ Auth::user()->email }}" id="email" />
                        </div>
                        <div class="m-3 d-flex">
                            <label class="form-label mx-auto" for="phone">Telefono</label>
                            <input class="form-control w-75" type="text" name="phone"
                                value="{{ Auth::user()->phone }}" id="phone" />
                        </div>
                        <div class="m-3 d-flex">
                            <label class="form-label mx-auto" for="user_img">Inserisci un immagine</label>
                            <input class="form-control w-75" type="file" name="user_img"
                                value="" id="user_img" />
                        </div>
                        <button  type="submit"
                            class="btn btn-form m-3 float-end">Modifica profilo</button>
                    </fieldset>
                </form>
    </div>
    
</x-main>